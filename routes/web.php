<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentAnswerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthController::class,'start'])->name('start');

Route::get('/game',[AuthController::class,'game'])->name('game');


Route::get('/ageCalc',[AuthController::class,'ageCalc'])->name('ageCalc');

Route::get('/bmiform',[AuthController::class,'bmiform'])->name('bmiform');
Route::post('/bmi',[AuthController::class,'bmi'])->name('bmi');

Route::get('login_form', [AuthController::class,'login_form'])->name('login_form');
Route::post('login', [AuthController::class,'login'])->name('login');


Route::get('/forgot_password_form',[AuthController::class,'forgot_password_form'])->name('forgot_password_form');
Route::post('/forgot_password',[AuthController::class,'forgot_password'])->name('forgot_password');

Route::post('/vCode/{user_id}',[AuthController::class,'vCode'])->name('vCode');


Route::post('/change_password/{user_id}',[AuthController::class,'change_password'])->name('change_password');


//login with face book
Route::get('/auth/facebook', [AuthController::class,'redirectToFacebook']);
Route::get('/auth/facebook/callback',[ AuthController::class,'handleFacebookCallback']);



Route::get('logout', [AuthController::class,'logout'])->name('logout');



Route::get('update_form/{id}', [UserController::class,'update_form'])->name('updateuser_form');
Route::put('update/{id}', [UserController::class,'update'])->name('updateuser');


Route::get('showEQ/{exam_id}',[QuestionController::class,'show'])->name('exam.show');



Route::get('student_degrees/student_id/{id}',[StudentAnswerController::class,'student_degrees'])->name('student_degrees');//show all student degrees in all exams


Route::group(['middleware'=> 'user'], function () {
    
    
    Route::get('userhome',[UserController::class,'userhome'])->name('userhome');
   

    // Route::get('all_exams_user/{user_id}',[ExamController::class,'all_exams_user'])->name('all_exams_user'); 

    
    Route::post('store_stu_ans/{exam_id}',[StudentAnswerController::class,'store_stu_ans'])->name('store_stu_ans');
    Route::post('store_stu_ans_multi/{exam_id}',[StudentAnswerController::class,'store_stu_ans_multi'])->name('store_stu_ans_multi');
    
    Route::get('delete_student/{student_id}',[UserController::class,'delete_student'])->name('deleteStudentAccount');
    
    Route::get('show_student_ans/{exam_id}',[StudentAnswerController::class,'show_student_ans'])->name('show_student_ans');
     
    
    Route::get('exam_mark_for_student/{exam_id}',[StudentAnswerController::class,'exam_mark_for_student'])->name('exam_mark_for_student');
    
});




Route::group(['middleware'=> 'admin'], function () {
    Route::get('add_admin_form', [UserController::class,'add_admin_form'])->name('add_admin_form');
    Route::get('add_student_form', [UserController::class,'add_student_form'])->name('add_student_form');
    Route::post('add_user', [UserController::class,'add_user'])->name('add_user');
    
    
    
    
    
    
    Route::get('allstudents', [UserController::class,'allstudents'])->name('allstudents');
    Route::get('alladmins', [UserController::class,'alladmins'])->name('alladmins');
    
    
    
    Route::post('search_student', [UserController::class,'search'])->name('search_student');
    Route::post('search_admin', [UserController::class,'search_admin'])->name('search_admin');
    
    
    Route::get('adminhome',[UserController::class,'adminhome'])->name('adminhome');
    
    
    Route::delete('destroy/{id}',[UserController::class,'destroy'])->name('destroyuser');
    
    
    Route::get('add_exam_form',[ExamController::class,'create_form'])->name('exam.createForm');
    Route::post('add_exam',[ExamController::class,'create'])->name('exam.create');
    
    
    Route::get('all_exams',[ExamController::class,'all'])->name('exam.all'); 
    Route::get('past_exams',[ExamController::class,'past_exams'])->name('exam.past'); 
    
    
    Route::get('update_exam_form/{exam_id}',[ExamController::class,'update_form'])->name('exam.update_form');
    Route::put('update_exam/{exam_id}',[ExamController::class,'update'])->name('exam.update');
    
    //the two wil be deleted
    // Route::get('add_question_form/{exam_id}',[QuestionController::class,'add_form'])->name('question.add_form');
    // Route::post('add_question/{exam_id}',[QuestionController::class,'add'])->name('question.add');
    //the two wil be deleted
 
    Route::get('add_discriptive_form/{exam_id}',[QuestionController::class,'add_discriptive_form'])->name('question.add_discriptive_form');
    Route::post('add_discriptive/{exam_id}',[QuestionController::class,'add_discriptive'])->name('question.add_discriptive');

    
    Route::get('add_multi_choice_form/{exam_id}',[QuestionController::class,'add_multi_choice_form'])->name('question.add_multi_choice_form');
    Route::post('add_multi_choice/{exam_id}',[QuestionController::class,'add_multi_choice'])->name('question.add_multi_choice');

    
    Route::get('students_degrees/{exam_id}',[StudentAnswerController::class,'students_degrees'])->name('students_degrees');//show all students degrees in one exam
    
    Route::get('update_discriptive_form/{question_id}',[QuestionController::class,'update_discriptive_form'])->name('question.update_discriptive_form');
    Route::put('update_discriptive/{question_id}',[QuestionController::class,'update_discriptive'])->name('question.update_discriptive');
   
   
    Route::get('update_multiChoice_form/{question_id}',[QuestionController::class,'update_multiChoice_form'])->name('question.update_multiChoice_form');
    Route::put('update_multiChoice/{question_id}',[QuestionController::class,'update_multiChoice'])->name('question.update_multiChoice');

    Route::delete('delete_exam/{exam_id}',[ExamController::class,'delete'])->name('exam.delete');
    Route::delete('hide_exam/{exam_id}',[ExamController::class,'hide'])->name('exam.hide');

    Route::delete('delete_Discriptive/{question_id}',[QuestionController::class,'deleteDiscriptive'])->name('deleteDiscriptive');
    Route::delete('delete_MutiChoice/{question_id}',[QuestionController::class,'deleteMutiChoice'])->name('deleteMutiChoice');
    
    
}); 




//try more data
//time of exam
//delete puttons