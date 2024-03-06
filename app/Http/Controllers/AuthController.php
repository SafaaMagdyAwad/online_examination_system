<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function start(){
        $logedinuser=Auth::user();
        if($logedinuser!=null){
             if($logedinuser['admin']==0){
                $year_id=$logedinuser['year_id'];
                $exams=Exam::where('year_id',$year_id)->get();
 
                    return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams]);
                }else if($logedinuser['admin']==1){
                    return view("admin.home",["logedinuser"=>$logedinuser]);
                }
                
        }else{
            return view("welcome");
        }
    }

    public function login_form(){
        return view("auth.login",["msg"=>"login","color"=>"light"]);
    }
    public function login(Request $request){
        
        $request->validate([
            "email"=> "required|email",
            "password"=> "required",
        ]);
        $user = User::where("email",$request->email)->first();
        if($user != null){
            $password_checked = Hash::check($request->password, $user->password);
            if($password_checked){
                Auth::login($user);
                if($user['admin']==0){
                    
                    $year_id=$user['year_id'];
                    $exams=Exam::where('year_id',$year_id)->get();
                    $logedinuser=Auth::user();
                    return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams]);
                }else if($user['admin']==1){
                    $logedinuser=Auth::user();
                    return view("admin.home",["logedinuser"=>$logedinuser]);
                }
            }else{
                return view("auth.login",["msg"=>" password is incorrect","color"=>"danger"]);
            }
        }else{
            return view("auth.login",["msg"=>"enter valid email","color"=>"danger"]);

        }

    }
    public function logout(){
        Auth::logout();
        return view("welcome");
    }
}
