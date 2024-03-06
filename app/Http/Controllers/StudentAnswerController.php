<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use App\Models\StudentAnswer;
use App\Models\StudentExams;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAnswerController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }

    public function store_stu_ans(Request $request){
        
        $logedinuser=Auth::user();
       
        $answerd_questions=StudentAnswer::where('student_id',$request->student_id)->where("exam_id",$request->exam_id)->get();
        $id=[];
        foreach($answerd_questions as $answerd_questions_id){
            $id[]=$answerd_questions_id->question_id;
        }
        $questions=Question::where("exam_id",$request->exam_id)->whereNotIn("id",$id)->get();//exam questions for student except for ones he answerd
        // dd($questions);
        $exam=Exam::find($request->exam_id);    
        $validation=$request->validate([
            "exam_id"=> "required",
            "student_id"=> "required",
            "question_id"=> "required",
            "student_answer"=> "required",
            "question_answer"=> "required",
        ]);
        $safaa=StudentAnswer::where("student_id",$request->student_id)->where("question_id",$request->question_id)->exists();//if student answered this question
        // dd($safaa);
        if($safaa){
            
            
            return view("exam.show_for_user",["questions"=> $questions,"logedinuser"=> $logedinuser,"exam"=>$exam,"msg"=>false]);
            
        }else{
            // store in student answer
            if($request->student_answer==$request->question_answer){
                $mark=$request->mark;
            }else{
                $mark=0;
            }
            
            // dd($request->all());
            StudentAnswer::create([
                "exam_id"=>$request->exam_id,
                "student_id"=>$request->student_id,
                "question_id"=>$request->question_id,
                "question"=>$request->question,
                "student_ans"=>$request->student_answer,
                "ans"=>$request->question_answer,
                "mark"=>$mark,
                "full_mark"=>$request->mark
                
            ]);
            //update in student_exams total_mark
            $student_exam=StudentExams::where("student_id",$request->student_id)->where("exam_id",$request->exam_id)->first();
            $student_exam->update([
                "total_mark"=>$student_exam['total_mark']+$mark,
            ]);
            // dd($questions);
            return view("exam.show_for_user",["questions"=> $questions,"logedinuser"=> $logedinuser,"exam"=>$exam ,"msg"=>true]);
        }
       
    }


    public function show_student_ans($exam_id){
        $logedinuser=Auth::user();
        $answred_questions=StudentAnswer::where('exam_id',$exam_id)
        ->where('student_id',$logedinuser['id'])
        ->get();
        $student_exam=StudentExams::where("student_id",$logedinuser['id'])->where("exam_id",$exam_id)->first();
        // dd($answred_questions);
        if($answred_questions == null| $student_exam==null){
             
            $exams=Exam::where('year_id',$logedinuser['year_id'])->get();
            return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams]);
        }else{

            // dd($student_exam['total_mark']);
            $total_mark=$student_exam['total_mark'];
            return view("user.exam_results",["logedinuser"=>$logedinuser,"questions"=>$answred_questions,"total_mark"=>$total_mark]);
        }
       
    }

    public function students_degrees($exam_id){
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
