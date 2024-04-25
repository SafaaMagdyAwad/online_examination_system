<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DiscriptiveQuestion;
use App\Models\Exam;
use App\Models\MultiChoiceQuestion;
use App\Models\StudentAnswer;
use App\Models\StudentExams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAnswerController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }

    public function store_stu_ans(Request $request, $exam_id)
    {
        $logedinuser=Auth::user();
        $exam=Exam::find($exam_id);
        $chick=StudentAnswer::where('student_id',$logedinuser['id'])->where("exam_id",$exam_id)->where('question_id',$request['question_id'])->exists();
        $answerd_questions=StudentAnswer::where('student_id',$logedinuser['id'])->where("exam_id",$exam_id)->get();
        $id=[];
        foreach($answerd_questions as $answerd_questions_id){
            $id[]=$answerd_questions_id->question_id;
        }
   
        $discriptiveQuestions=DiscriptiveQuestion::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();
        $multiChoiceQuestions=multiChoiceQuestion::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();
        
        if($chick){
            return view("exam.show_for_user",["discriptiveQuestions"=> $discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
        }else{
           
           
                
                if($request['student_ans']==$request['ans']){
                    $request['mark']=$request['full_mark'];
                }
                $calculate=StudentExams::where("exam_id",$exam_id)
                ->where("student_id",$logedinuser['id'])
                ->first();
                
                $calculate->update([
                    'total_mark'=>$calculate['total_mark']+$request['mark']
                ]);
                StudentAnswer::create($request->all());
                return view("exam.show_for_user",["discriptiveQuestions"=> $discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
        }
        

    }
    public function store_stu_ans_multi(Request $request, $exam_id)
    {
        $logedinuser=Auth::user();
        $exam=Exam::find($exam_id);
        $answerd_questions=StudentAnswer::where('student_id',$logedinuser['id'])->where("exam_id",$exam_id)->get();
        $chick=StudentAnswer::where('student_id',$logedinuser['id'])->where("exam_id",$exam_id)->where('question_id',$request['question_id'])->exists();
        $id=[];
       foreach($answerd_questions as $answerd_questions_id){
           $id[]=$answerd_questions_id->question_id;
       }
       
       $discriptiveQuestions=DiscriptiveQuestion::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();
       $multiChoiceQuestions=multiChoiceQuestion::where("exam_id",$exam_id)->whereNotIn("id",$id)->get();
        $question=MultiChoiceQuestion::where("exam_id",$exam_id)->where("id",$request['question_id'])->first();
        if($chick){
            return view("exam.show_for_user",["discriptiveQuestions"=> $discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
        }else{
            if($question['correct1']=="true"){
                if($request['student_ans']==$question['ans1']){
                    $request['mark']=$question['mark'];
                    $request['ans']=$question['ans1'];
                }
            }
            if($question['correct2']=="true"){
                if($request['student_ans']==$question['ans2']){
                    $request['mark']=$question['mark'];
                    $request['ans']=$question['ans2'];
                }
            }
            if($question['correct3']=="true"){
                if($request['student_ans']==$question['ans3']){
                    $request['mark']=$question['mark'];
                    $request['ans']=$question['ans3'];
                }
            }
            if($question['correct4']=="true"){
                if($request['student_ans']==$question['ans4']){
                    $request['mark']=$question['mark'];
                    $request['ans']=$question['ans4'];
                }
            }
            $calculate=StudentExams::where("exam_id",$exam_id)
            ->where("student_id",$logedinuser['id'])
            ->first();
            
            $calculate->update([
                'total_mark'=>$calculate['total_mark']+$request['mark']
            ]);
            StudentAnswer::create($request->all());
            return view("exam.show_for_user",["discriptiveQuestions"=> $discriptiveQuestions,"multiChoiceQuestions"=>$multiChoiceQuestions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>true]);
        }
        



    }

    public function show_student_ans($exam_id)
    {
        $logedinuser=Auth::user();
        $answred_questions=StudentAnswer::where('exam_id',$exam_id)
        ->where('student_id',$logedinuser['id'])
        ->get(); //the answered questions of this exam
        $student_exam=StudentExams::where("student_id",$logedinuser['id'])->where("exam_id",$exam_id)->first();//shows if the student entred the exam or not
        // dd($answred_questions);
        if($answred_questions == null| $student_exam==null){//if the student didnt answer the questions of the exam or didnt enter it
            $year_id=$logedinuser['year_id']; 
            $now=date("H:i:s");
            $date=date("Y-m-d");
            $degrees=StudentExams::where("student_id",$logedinuser['id'])->get();
            $exams=Exam::where('year_id',$year_id)->where('start','<=',$now)->Where('end','>=',$now)->where('sDate','<=',$date)->Where('eDate','>=',$date)->get();


            $pastExams=Exam::where('year_id',$year_id)->Where('eDate','<',$date)->get();
            $futureExams=Exam::where('year_id',$year_id)->Where('sDate','>',$date)->get();
            return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams,"pastExams"=>$pastExams,"futureExams"=>$futureExams,"degrees"=>$degrees]);
       
        }else{

            // dd($student_exam['total_mark']);
            $total_mark=$student_exam['total_mark'];
            return view("user.exam_results",["logedinuser"=>$logedinuser,"questions"=>$answred_questions,"total_mark"=>$total_mark]);
        }
       
    }

    public function students_degrees($exam_id)
    {
        $logedinuser=Auth::user();
        $students=StudentExams::where("exam_id",$exam_id)->get();
        // dd($students);
        return view("exam.all_results",["logedinuser"=>$logedinuser,"students"=>$students]);
        
    }
    
    
    public function student_degrees($student_id){
        $logedinuser=Auth::user();
        
        $degrees=StudentExams::where("student_id",$student_id)->get();
        // dd($degrees);
        return view("admin.all_student_degrees",["degrees"=>$degrees,"logedinuser"=>$logedinuser]);
    }
    

   

}
