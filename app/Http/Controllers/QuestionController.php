<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use App\Models\StudentAnswer;
use App\Models\StudentExams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }
    public function add_form($examid){
        $exam = Exam::find($examid);
        $logedinuser=Auth::user();
        return view("question.add",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"add question"]);
    }
    public function add(Request $request,$examid){
        $exam = Exam::find($examid);
        $data=$request->all();
        $logedinuser=Auth::user();
        $validate=$request->validate([
            "question"=> "required",
            "s1"=> "required",
            "s2"=> "required",
            "s3"=> "required",
            "s4"=> "required",
            "ans"=> "required",
            "mark"=> "required",
            "exam_id"=> "required",
        ]);
        // dd($data);
        Question::create($data);
       
        
        return view("question.add",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"question created ."]);
        
    }
    public function show($exam_id){
        $exam = Exam::find($exam_id);
        $logedinuser=Auth::user();
        $exams=Exam::where('year_id',$logedinuser['year_id'])->get();
        $questions=Question::where("exam_id",$exam_id)->get();
        $now=date("H:i:s");
        
        if($logedinuser['admin']==1){
            

            return view("exam.show_for_admin",["questions"=> $questions,"logedinuser"=> $logedinuser,"exam"=>$exam]);
        }else if($logedinuser['admin']==0){//student
            //check if was created
            $safaa=StudentExams::where("student_id",$logedinuser['id'])
            ->where("exam_id",$exam_id)
            ->exists();
            $answerd_questions=StudentAnswer::where('student_id',$logedinuser['id'])->where("exam_id",$exam_id)->get();
             $id=[];
            foreach($answerd_questions as $answerd_questions_id){
                $id[]=$answerd_questions_id->question_id;
            }
            $questions=Question::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();//exam questions for student except for ones he answerd
            if($exam['start']<$now && $now<$exam['end']){//if exam time still on
                //create student exam just
                if($safaa){//if student has entred but didnt finish the exam==>>student exam was created before
               
                return view("exam.show_for_user",["questions"=> $questions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
                }else{
                    // student didnt enter the exam before
                    StudentExams::create([
                        "student_id"=>$logedinuser['id'],
                        "exam_id"=>$exam_id,
                        "student_name"=>$logedinuser['name'],
                        "exam_title"=>$exam['title'],
                        "total_mark"=>0
                    ]);
                    return view("exam.show_for_user",["questions"=> $questions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
                // dd($now);
                }
            }else{
                return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams]);
            }
        }
    }

    public function update_form($id){
        $logedinuser=Auth::user();
        $question=Question::where("id",$id)->first();
        return view("question.update",["logedinuser"=>$logedinuser,"msg"=>"update","question"=>$question]);
    }
    
    public function update(Request $request, $id){
        $logedinuser=Auth::user();
        $question=Question::where("id",$id)->first();
        if($request->question){
            $validator=$request->validate([
                "question"=> "required",
            ]);
            $question->update([
                "question"=>$request->question
            ]);
        }else if($request->s1){
            $validator=$request->validate([
                "s1"=> "required",
            ]);
            $question->update([
                "s1"=>$request->s1
            ]);
        }else if($request->s2){
            $validator=$request->validate([
                "s2"=> "required",
            ]);
            $question->update([
                "s2"=>$request->s2
            ]);
        }else if($request->s3){
            $validator=$request->validate([
                "s3"=> "required",
            ]);
            $question->update([
                "s3"=>$request->s3
            ]);
        }else if($request->s4){
            $validator=$request->validate([
                "s4"=> "required",
            ]);
            $question->update([
                "s4"=>$request->s4
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
    
        return view("question.update",["logedinuser"=>$logedinuser,"msg"=>"successfully updated","question"=>$question]);
       
    }

    
} 
