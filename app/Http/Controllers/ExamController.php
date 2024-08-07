<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Question;
use App\Models\StudentAnswer;
use App\Models\StudentExams;
use App\Models\User;
use Carbon\Traits\Timestamp;
use Faker\Test\Core\DateTimeTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ExamController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");

    }
    public function create_form(){
        $logedinuser=Auth::user();
        return view("exam.create",["logedinuser"=>$logedinuser,"msg"=>"add exam"]);
    }
    public function create(Request $request){
        $logedinuser=Auth::user();
        $data=$request->all();
        // dd($data);
        $validation=$request->validate([
            "title"=> "required",
            "year_id"=> "required",
            "start"=> "required",
            "end"=> "required",
        ]);
        $exam=Exam::create($data);
        return view("question.add",["exam"=> $exam,"logedinuser"=> $logedinuser,"msg"=>"add question"]);   
    }


    public function all(){  
        $exams=Exam::all();
        $logedinuser=Auth::user();
        return view ("exam.all",["logedinuser"=>$logedinuser,"exams"=>$exams]);
    }
    public function past_exams(){ 
        $now=date("H:i:s");
        $logedinuser=Auth::user();
        $exams=Exam::Where('end','<',$now)->get();
        return view ("exam.past",["logedinuser"=>$logedinuser,"exams"=>$exams]);
    }
 
    public function update_form($id){
        $exam=Exam::find($id);
        $logedinuser=Auth::user();
        return view('exam.update',['exam'=>$exam,'logedinuser'=>$logedinuser,'msg'=> 'update']);
    }

    public function update(Request $request,$id){
        $logedinuser=Auth::user();
        // dd($logedinuser);
        $exam=Exam::find($id);
            $validation=$request->validate([
                'title'=> 'required',
                'start'=> 'required',
                'end'=> 'required',
                'year_id'=> 'required',
            ]);
            $exam->update([
                'title'=>$request->title,
                'start'=>$request->start,
                'end'=>$request->end,
                'year_id'=>$request->year_id,
            ]);
       
        $exams=Exam::all();
        return view ("exam.all",["logedinuser"=>$logedinuser,"exams"=>$exams]);
    }
    public function userfun(){
        $logedinuser=Auth::user();
        $year_id=$logedinuser['year_id'];

        $exams=Exam::where('year_id',$year_id)->whereNull('deleted_at')->get();
        //    dd($exams);
        $degrees=StudentExams::where("user_id",$logedinuser['id'])->get();
       
        return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams,"degrees"=>$degrees]);
    }

    public function delete($id){
        $exam=Exam::find($id);//
        $exam->forceDelete();
        $exams=Exam::all();
        $logedinuser=Auth::user();
        return view ("exam.all",["logedinuser"=>$logedinuser,"exams"=>$exams]);

    }
    public function hide($id){
        $exam=Exam::find($id);//
        $exam->delete();
        $exams=Exam::all();
        $logedinuser=Auth::user();
        return view ("exam.all",["logedinuser"=>$logedinuser,"exams"=>$exams]);

    }

    
}
