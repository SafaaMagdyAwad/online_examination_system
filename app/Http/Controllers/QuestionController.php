<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DiscriptiveQuestion;
use App\Models\Exam;
use App\Models\multiChoiceQuestion;
use App\Models\Question;
use App\Models\StudentAnswer;
use App\Models\StudentExams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth");
    }
    
    public function show($exam_id)
    {
        $exam = Exam::find($exam_id);
        $logedinuser=Auth::user();
        
        // dd($now);
        if($logedinuser['admin']==1){
            $exams=Exam::where('year_id',$logedinuser['year_id'])->get();
            $discriptiveQuestions=DiscriptiveQuestion::where("exam_id",$exam_id)->get();
            $multiChoiceQuestions=multiChoiceQuestion::where("exam_id",$exam_id)->get();
            return view("exam.show_for_admin",["logedinuser"=> $logedinuser,"exam"=>$exam,"discriptiveQuestions"=>$discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions]);
        }else if($logedinuser['admin']==0){//student
            //check if was created
            
            $safaa=StudentExams::where("user_id",$logedinuser['id'])
            ->where("exam_id",$exam_id)
            ->exists();//created when a student enter the exam
            $answerd_questions=StudentAnswer::where('user_id',$logedinuser['id'])->where("exam_id",$exam_id)->get();
             $id=[];
            foreach($answerd_questions as $answerd_questions_id){
                $id[]=$answerd_questions_id->question_id;
            }
            
            $discriptiveQuestions=DiscriptiveQuestion::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();
            $multiChoiceQuestions=multiChoiceQuestion::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();
            
            //if($exam['start']<$now && $now<$exam['end']){//if exam time still on
                //create student exam just
                if($safaa){//if student has entred but didnt finish the exam==>>student exam was created before
               
                    return view("exam.show_for_user",["discriptiveQuestions"=> $discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
                }else{
                    // student didnt enter the exam before
                    StudentExams::create([
                        "user_id"=>$logedinuser['id'],
                        "exam_id"=>$exam_id,
                        "student_name"=>$logedinuser['name'],
                        "exam_title"=>$exam['title'],
                        "total_mark"=>0
                    ]);
                    return view("exam.show_for_user",["discriptiveQuestions"=> $discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
                // dd($now);
                }
            //}else{
              //  return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams,"entred"=>"hidden"]);
            //}
        }
    }
    
    public function add_discriptive_form($examid)
    {
        $exam = Exam::find($examid);
        $logedinuser=Auth::user();
        return view("question.addDiscriptive",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"add question"]);
    }

    public function add_discriptive($examid,Request $request)
    {
        $exam = Exam::find($examid);
        $data=$request->all();
        $logedinuser=Auth::user();
        $validate=$request->validate([
            "exam_id"=> "required",
            "question"=> "required",
            "ans"=> "required",
            
        ]);
        // dd($data);
        DiscriptiveQuestion::create($data);
       
        
        return view("question.addDiscriptive",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"question created ."]);
    }


    public function add_multi_choice_form($examid)
    {
        $exam = Exam::find($examid);
        $logedinuser=Auth::user();
        return view("question.addMultiChoice",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"add question"]);
    }

    public function add_multi_choice($examid ,Request $request)
    {
        $exam = Exam::find($examid);
        $logedinuser=Auth::user();
        $validate=$request->validate([
            "question"=> "required", 
        ]);
       MultiChoiceQuestion::create($request->all());        
       return view("question.addMultiChoice",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"add question"]);
    }

    public function deleteDiscriptive($id)
    {
        $question=DiscriptiveQuestion::find($id);
        $question->delete();
        $exam = Exam::find($question['exam_id']);
        $logedinuser=Auth::user();
        $discriptiveQuestions=DiscriptiveQuestion::where("exam_id",$question['exam_id'])->get();
        $multiChoiceQuestions=multiChoiceQuestion::where("exam_id",$question['exam_id'])->get();
        return view("exam.show_for_admin",["logedinuser"=> $logedinuser,"exam"=>$exam,"discriptiveQuestions"=>$discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions]);
    }
    public function deleteMutiChoice($id)
    {
        $question=multiChoiceQuestion::find($id);
        $question->delete();
        $exam = Exam::find($question['exam_id']);
        $logedinuser=Auth::user();
        $discriptiveQuestions=DiscriptiveQuestion::where("exam_id",$question['exam_id'])->get();
        $multiChoiceQuestions=multiChoiceQuestion::where("exam_id",$question['exam_id'])->get();
        return view("exam.show_for_admin",["logedinuser"=> $logedinuser,"exam"=>$exam,"discriptiveQuestions"=>$discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions]);
    }

    public function update_discriptive_form($id)
    {
        $logedinuser=Auth::user();
        $question=DiscriptiveQuestion::where("id",$id)->first();
        return view("question.update_discriptive",["logedinuser"=>$logedinuser,"msg"=>"update","question"=>$question]);
    }
    
    public function update_discriptive(Request $request, $id){
        $logedinuser=Auth::user();
        $question=DiscriptiveQuestion::where("id",$id)->first();
        if($request->question){
            $validator=$request->validate([
                "question"=> "required",
            ]);
            $question->update([
                "question"=>$request->question
            ]);
        }else if($request->ans){
            $validator=$request->validate([
                "ans"=> "required",
            ]);
            $question->update([
                "ans"=>$request->ans
            ]);
        }else if($request->mark){
            $validator=$request->validate([
                "mark"=> "required",
            ]);
            $question->update([
                "mark"=>$request->mark
            ]);
        }
    
        return view("question.update_discriptive",["logedinuser"=>$logedinuser,"msg"=>"successfully updated","question"=>$question]);
       
    }
    public function update_multiChoice_form($id){
        $logedinuser=Auth::user();
        $question=multiChoiceQuestion::where("id",$id)->first();
        return view("question.update_multi_choice",["logedinuser"=>$logedinuser,"msg"=>"update","question"=>$question]);
    }
    
    public function update_multiChoice(Request $request, $id){
        $logedinuser=Auth::user();
        $question=multiChoiceQuestion::where("id",$id)->first();
        if($request->question){
            $validator=$request->validate([
                "question"=> "required",
            ]);
            $question->update([
                "question"=>$request->question
            ]);
        }
         if($request->correct2){
            $validator=$request->validate([
                "correct2"=> "required",
            ]);
            $question->update([
                "correct1"=>"false",
                "correct2"=>$request->correct2,
                "correct3"=>"false",
                "correct4"=>"false",
            ]);
        }
         if($request->correct3){
            $validator=$request->validate([
                "correct3"=> "required",
            ]);
            $question->update([
                "correct1"=>"false",
                "correct2"=>"false",
                "correct3"=>$request->correct3,
                "correct4"=>"false",
            ]);
        }
        if($request->correct4){
            $validator=$request->validate([
                "correct4"=> "required",
            ]);
            $question->update([
                "correct1"=>"false",
                "correct2"=>"false",
                "correct3"=>"false",
                "correct4"=>$request->correct4,
            ]);
        }else if($request->correct1){
            $validator=$request->validate([
                "ans"=> "required",
            ]);
            $question->update([
                "correct1"=>$request->correct1,
                "correct2"=>"false",
                "correct3"=>"false",
                "correct4"=>"false",
            ]);
        }
         if($request->mark){
            $validator=$request->validate([
                "mark"=> "required",
            ]);
            $question->update([
                "mark"=>$request->mark
            ]);
        }
    
        return view("question.update_multi_choice",["logedinuser"=>$logedinuser,"msg"=>"successfully updated","question"=>$question]);
       
    }
    
} 
