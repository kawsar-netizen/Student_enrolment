<?php

use App\Http\Controllers\BBAController;
use App\Http\Controllers\CSEController;
use App\Http\Controllers\ECEController;
use App\Http\Controllers\EEEController;
use App\Http\Controllers\LLBController;
use App\Http\Controllers\MBAController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AddteacherController;
use App\Http\Controllers\AllteacherController;
use App\Http\Controllers\TutionfreeController;
use App\Http\Controllers\AddstudentsController;
use App\Http\Controllers\AllstudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Student Login Dashboard here....
Route::get('/',[AdminController::class,'student_login'])->name('student_login');

// Admin Login Dashboard here....
Route::get('/backend',[AdminController::class,'admin_login'])->name('admin_login');

// Admin Logout dashboard....

Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::get('/student_logout',[AdminController::class,'student_logout'])->name('student_logout');

// Admin Dashboard......

Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard'])->name('admin_dashboard');

Route::post('/adminlogin',[AdminController::class,'admin_login_dashboard'])->name('adminlogin');

Route::get('/view_profile',[AdminController::class,'view_profile'])->name('view_profile');

Route::get('/setting',[AdminController::class,'setting'])->name('setting');

// Student Dashboard....

Route::post('/studentlogin',[AdminController::class,'student_login_dashboard']);

Route::get('/student_dashboard',[AdminController::class,'student_dashboard']);

Route::get('/student_profile',[AdminController::class,'studentProfile'])->name('profile');

Route::get('/student_setting',[AdminController::class,'studentsetting'])->name('setting');


//Addstudent Route...

Route::get('/addstudnet',[AddstudentsController::class,'addstudnet'])->name('addstudnet');

Route::post('/save_studnet',[AddstudentsController::class,'savestudent'])->name('savestudent');

//Allstudent Route....

Route::get('/allstudnet',[AllstudentsController::class,'allstudnet'])->name('allstudnet');

Route::get('/student_view/{id}',[AllstudentsController::class,'studentview'])->name('studentview');

Route::get('/student_edit/{id}',[AllstudentsController::class,'studentedit'])->name('studentedit');

Route::post('/student_update/{id}',[AllstudentsController::class,'studentupdate'])->name('studentupdate');

Route::get('/student_delete/{id}',[AllstudentsController::class,'student_delete'])->name('student_delete');

//All Route pages are her......
Route::get('/tutionfree',[TutionfreeController::class,'tutionfree'])->name('tutionfree');

Route::get('/result',[ResultController::class,'result'])->name('result');

//All Subject route are her......
Route::get('/cse',[CSEController::class,'cse'])->name('cse');

Route::get('/eee',[EEEController::class,'eee'])->name('eee');

Route::get('/bba',[BBAController::class,'bba'])->name('bba');

Route::get('/mba',[MBAController::class,'mba'])->name('mba');

Route::get('/ece',[ECEController::class,'ece'])->name('ece');

Route::get('/llb',[LLBController::class,'llb'])->name('llb');

//All Teacher route are her......
Route::get('/allteacher',[AllteacherController::class,'allteacher'])->name('allteacher');

Route::get('/addteacher',[AddteacherController::class,'addteacher'])->name('addteacher');

Route::post('/store_teacher',[AddteacherController::class,'storeteacher'])->name('storeteacher');

Route::get('/delete_teacher/{id}',[AllteacherController::class,'deleteteacher'])->name('deleteteacher');

Route::get('/teachers_view/{id}',[AllteacherController::class,'teacherview'])->name('teacherview');

Route::get('/teachers_edit/{id}',[AllteacherController::class,'teacherEdit'])->name('teacherEdit');

Route::post('/teachers_update/{id}',[AllteacherController::class,'teacherUpdate'])->name('teacherUpdate');
