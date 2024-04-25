<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\StudentExams;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\ForgetPasswordMail;
use App\Notifications\success;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    //
    public function game(){
        return view('game.index');
    }

    public function start(){
        $logedinuser=Auth::user();
        if($logedinuser!=null){
             if($logedinuser['admin']==0){
                $year_id=$logedinuser['year_id'];
                $now=date("H:i:s");
                $date=date("Y-m-d");
                $exams=Exam::where('year_id',$year_id)->where('start','<=',$now)->Where('end','>=',$now)->where('sDate','<=',$date)->Where('eDate','>=',$date)->get();
                $degrees=StudentExams::where("student_id",$logedinuser['id'])->get();

                $pastExams=Exam::where('year_id',$year_id)->Where('eDate','<',$date)->get();
                $futureExams=Exam::where('year_id',$year_id)->Where('sDate','>',$date)->get();
                // Notification::send($logedinuser,new success($logedinuser));
                return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams,"pastExams"=>$pastExams,"futureExams"=>$futureExams,"degrees"=>$degrees]);


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
                    $now=date("H:i:s");
                    $date=date("Y-m-d");
                    $exams=Exam::where('year_id',$year_id)->where('start','<=',$now)->Where('end','>=',$now)->where('sDate','<=',$date)->Where('eDate','>=',$date)->get();
                    
                    $logedinuser=Auth::user();
                    $degrees=StudentExams::where("student_id",$logedinuser['id'])->get();


                    $pastExams=Exam::where('year_id',$year_id)->Where('eDate','<',$date)->get();
                $futureExams=Exam::where('year_id',$year_id)->Where('sDate','>',$date)->get();
                return view("user.home",["logedinuser"=>$logedinuser,"exams"=>$exams,"pastExams"=>$pastExams,"futureExams"=>$futureExams,"degrees"=>$degrees]);


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
    public function forgot_password_form(){
        return view('auth.forgetpassword',["msg"=>"enter email that you created the accont with"]);
    }
    public function forgot_password(Request $request){
        //validation
        // dd($request->email);
        $user=User::where('email',$request->email)->first();
        // dd($user);
        if($user==null){
            // dd("user is null");
            return view('auth.forgetpassword',["msg"=>" wrong email enter email that you created the accont with"]);
        }else{
            //send email
            $vCode=Str::random(4);
            Mail::to($request->email)->send(new ForgetPasswordMail($vCode,$user));
            return view('auth.vertivication_code',["vCode"=>$vCode,"user"=>$user,"msg"=>"we send vertivication code on your email"]);
        }
    }

   
    public function vCode(Request $request,$user){

        if($request->vCode==$request->userVCode){
            return view('auth.changePassword',["user"=>$user,"msg"=>"change your password"]);
        }else{
            return view('auth.vertivication_code',["vCode"=>$request->vCode,"user"=>$user,"msg"=>"wrong code:("]);
        }

    }
    public function change_password(Request $request,$user_id){
        $user=User::find($user_id);
        
        $password = bcrypt($request->password);
        // dd($user);
        $user->update([
            'password'=>$password
        ]);
        return view("auth.login",["msg"=> "login","color"=>"success"]);
    }

    public function redirectToFacebook()
    {
        // dd(Socialite::driver('facebook'));
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();
        dd($facebookUser);
        // Check if the user already exists in your database
        $existingUser = User::where('email', $facebookUser->email)->first();
        
        if ($existingUser) {
            Auth::login($existingUser);
            return redirect('/home');
        } else {
            // If the user doesn't exist, create a new user record
            $user = new User();
            $user->name = $facebookUser->name;
            $user->email = $facebookUser->email;
            // You can add more fields if needed
            $user->save();

            Auth::login($user);
            return redirect('/home');
        }
    }

    public function logout(){
        Auth::logout();
        return view("welcome");
    }
    public function bmiform(){
        return view("health.bmi",["BMI"=>NULL]);
    }
    public function bmi(Request $request){
        $request->validate([
            "Weight"=> "required",
            "Height"=> "required",
        ]);
        if($request->Height!=0){
            $BMI=($request->Weight/($request->Height**2))*(10**4);
            return view("health.bmi",["BMI"=>$BMI]);
        }else{
            return view("health.bmi",["BMI"=>null]);

        }
    }
}
// MAIL_MAILER=smtp MAIL_HOST=sandbox.smtp.mailtrap.io MAIL_PORT=2525 MAIL_USERNAME=c6d6d9be382abb MAIL_PASSWORD=0536ead07b920b MAIL_ENCRYPTION=tlss MAIL_FROM_ADDRESS="contact@mywebsite.com" MAIL_FROM_NAME="control portal"