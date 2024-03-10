<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct(){
        $this->middleware("auth");
    }
    public function add_admin_form(){
        $logedinuser=Auth::user();
        
        return view("admin.add_admin",["logedinuser"=>$logedinuser,"msg"=>"add admin"]);
    }
    public function add_student_form(){
        $logedinuser=Auth::user();
        
        return view("admin.add_user",["logedinuser"=>$logedinuser,"msg"=>"add student"]);
        
    }
    public function add_user(Request $request){
        $data = $request->all();
        $msg=$data['msg'];
        $safaa=str_replace (' ','',$data['national_id']);//remove spaces from a string
        
        if($data['admin']==1){
            $validation=$request->validate([
                "name"=> "required",
               
                "national_id"=>"required|unique:users"
                
            ]);
            User::create([
            "name"=> $data["name"],
            "email"=> $safaa."@CSEAdmin",
            "password"=> bcrypt($data['national_id']),
            "year_id"=>$data['year_id'],
            "admin"=>$data['admin'],
            "national_id"=>$data['national_id'],]);
            
        }else if($data['admin']==0){//student     constant data for a student
            $validation=$request->validate([
                "name"=> "required",
                "year_id"=>"required",
                "national_id"=>"required|unique:users"
            ]);
            User::create([
                "name"=> $data["name"],
                "email"=> $safaa."@CSE",
                "password"=> bcrypt($data['national_id']),
                "year_id"=>$data['year_id'],
                "admin"=>$data['admin'],
                "national_id"=>$data['national_id'],

            ]);
        }
                    $logedinuser=Auth::user();
                    return view("admin.home",["logedinuser"=>$logedinuser]);

    }
      public function allstudents(){
        $users=User::where("admin",0)->get();
        // dd($users);
        $logedinuser=Auth::user();
        
        return view("admin.allstudents",["students"=>$users,"logedinuser"=>$logedinuser]);
    }
    public function alladmins(){
        $logedinuser=Auth::user();
        // dd($admin['id']);
        $users=User::where("admin",1)->where("id",'!=',$logedinuser['id'])
        ->get();
        // dd($users);
        return view("admin.alladmins",["admins"=>$users,"logedinuser"=>$logedinuser]);
    }
    public function search(Request $request){
        if($request->year_id){

            $users=User::where("year_id",$request->year_id)->get();
        }else if($request->name){

            $users=User::where("name","like","%".$request->name."%")
            ->where("admin",0)
            ->get();
        } 
        // dd($users);
        $logedinuser=Auth::user();
        
        return view("admin.allstudents",["students"=>$users,"logedinuser"=>$logedinuser]);
    }
    public function search_admin(Request $request){
        $logedinuser=Auth::user();

            $users=User::where("name","like","%".$request->name."%")
            ->where("admin",1)
            ->where("id","!=",$logedinuser['id'])
            ->get();
        
        // dd($users);
        return view("admin.alladmins",["admins"=>$users,"logedinuser"=>$logedinuser]);
    }
    public function update_form($id){
       
        $user=User::find($id);
        $logedinuser=Auth::user();
        // dd($logedinuser);
        if($logedinuser==null){
            return view("auth.login",["msg"=>"your not authnticated login ","color"=>"light"]);
        }else{

            return view("user.update",["user"=>$user,"msg"=>"update","logedinuser"=>$logedinuser]);
        }

    }
    
    public function update(Request $request,$id){
        $logedinuser=Auth::user();
        
       $user=User::find($id);
       if($request->name){
        $validation=$request->validate([
            "name"=>"required"
        ]);
        $user->update([
            "name"=> $request->name,
        ]);

        return view("user.update",["user"=>$user,"msg"=>"name updated successfully","logedinuser"=>$logedinuser]);
       }else if($request->email){
        $validation=$request->validate([
            "email"=>"required|email|unique:users"
        ]);
        $user->update([
            "email"=> $request->email,
        ]);

        return view("user.update",["user"=>$user,"msg"=>"email updated successfully","logedinuser"=>$logedinuser]);
       }else if($request->password){
        $validation=$request->validate([
            "password"=>"required|min:6"
        ]);
        $user->update([
            "password"=> $request->password,
        ]);

        return view("user.update",["user"=>$user,"msg"=>"password updated successfully","logedinuser"=>$logedinuser]);
       }else if($request->year_id){
        $validation=$request->validate([
            "year_id"=>"required"
        ]);
        $user->update([
            "year_id"=> $request->year_id,
        ]);

        return view("user.update",["user"=>$user,"msg"=>"year updated successfully","logedinuser"=>$logedinuser]);
       }else{
       

        return view("user.update",["user"=>$user,"msg"=>"you have to enter valid data","logedinuser"=>$logedinuser]);
       }
       

    }

    public function destroy($id){//admin delets another admin or user
        $logedinuser=Auth::user();

        $user=User::find($id);
        // dd($user);

        $user->delete();

        return view("admin.home",["logedinuser"=>$logedinuser]);
    }
    public function adminhome(){
        $logedinuser=Auth::user();
        return view("admin.home",["logedinuser"=>$logedinuser]);
    }
    public function userhome(){
        $logedinuser=Auth::user();
        if($logedinuser==null){
            return view("auth.login",["msg"=>"your not authnticated login ","color"=>"light"]);
        }else{
           
            $year_id=$logedinuser['year_id'];
            $exams=Exam::where('year_id',$year_id)->get();
            return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams]);
        }
    }

}
