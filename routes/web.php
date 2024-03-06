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



Route::get('login_form', [AuthController::class,'login_form'])->name('login_form');
Route::post('login', [AuthController::class,'login'])->name('login');



Route::get('logout', [AuthController::class,'logout'])->name('logout');



Route::get('update_form/{id}', [UserController::class,'update_form'])->name('updateuser_form');
Route::put('update/{id}', [UserController::class,'update'])->name('updateuser');


Route::get('showEQ/{exam_id}',[QuestionController::class,'show'])->name('exam.show');



Route::get('student_degrees/student_id/{id}',[StudentAnswerController::class,'student_degrees'])->name('student_degrees');//show all student degrees in all exams


Route::group(['middleware'=> 'user'], function () {
    
    
    Route::get('userhome',[UserController::class,'userhome'])->name('userhome');
   

    // Route::get('all_exams_user/{user_id}',[ExamController::class,'all_exams_user'])->name('all_exams_user'); 

    
    
    Route::post('store_stu_ans',[StudentAnswerController::class,'store_stu_ans'])->name('store_stu_ans');
   
    
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
    
    
    Route::get('update_exam_form/{exam_id}',[ExamController::class,'update_form'])->name('exam.update_form');
    Route::put('update_exam/{exam_id}',[ExamController::class,'update'])->name('exam.update');
    
    
    Route::get('add_question_form/{exam_id}',[QuestionController::class,'add_form'])->name('question.add_form');
    Route::post('add_question/{exam_id}',[QuestionController::class,'add'])->name('question.add');


    
    Route::get('students_degrees/{exam_id}',[StudentAnswerController::class,'students_degrees'])->name('students_degrees');//show all students degrees in one exam
    
    Route::get('update_question_form/{question_id}',[QuestionController::class,'update_form'])->name('question.update_form');
    Route::put('update_question/{question_id}',[QuestionController::class,'update'])->name('question.update');

    Route::delete('delete_exam/{exam_id}',[ExamController::class,'delete'])->name('exam.delete');
    
    
}); 




//try more data
//time of exam
//delete puttons