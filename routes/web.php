<?php

use App\Http\Controllers\BBAController;
use App\Http\Controllers\CSEController;
use App\Http\Controllers\ECEController;
use App\Http\Controllers\EEEController;
use App\Http\Controllers\LLBController;
use App\Http\Controllers\MBAController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResultController;
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

// Route::get('/','AdminController@student_login')->name('student_login');

Route::get('/',[AdminController::class,'admin_login'])->name('admin_login');

//Logout dashboard....

Route::get('/logout',[AdminController::class,'logout'])->name('logout');

// Admin Dashboard......

Route::get('/admin_dashboard',[AdminController::class,'admin_dashboard'])->name('admin_dashboard');

Route::post('/admin_login',[AdminController::class,'login_dashboard'])->name('admin_login');

Route::get('/view_profile',[AdminController::class,'view_profile'])->name('view_profile');

Route::get('/setting',[AdminController::class,'setting'])->name('setting');


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
