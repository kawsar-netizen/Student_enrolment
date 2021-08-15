<?php

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

Route::get('/','AdminController@student_login')->name('student_login');

Route::get('/backend','AdminController@admin_login')->name('admin_login');

//Logout dashboard....

Route::get('/logout','AdminController@logout')->name('logout');

// Admin Dashboard......

Route::get('/admin_dashboard','AdminController@admin_dashboard')->name('admin_dashboard');

Route::post('/admin_login','AdminController@login_dashboard')->name('admin_login');

Route::get('/view_profile','AdminController@view_profile')->name('view_profile');

Route::get('/setting','AdminController@setting')->name('setting');


//Addstudent Route...

Route::get('/addstudnet','AddstudentsController@addstudnet')->name('addstudnet');

Route::post('/save_studnet','AddstudentsController@savestudent')->name('savestudent');

//Allstudent Route....

Route::get('/allstudnet','AllstudentsController@allstudnet')->name('allstudnet');

Route::get('/student_view/{id}','AllstudentsController@studentview')->name('studentview');

Route::get('/student_edit/{id}','AllstudentsController@studentedit')->name('studentedit');

Route::post('/student_update/{id}','AllstudentsController@studentupdate')->name('studentupdate');

Route::get('/student_delete/{id}','AllstudentsController@student_delete')->name('student_delete');

//All Route pages are her......
Route::get('/tutionfree','TutionfreeController@tutionfree')->name('tutionfree');

Route::get('/result','ResultController@result')->name('result');

//All Subject route are her......
Route::get('/cse','CSEController@cse')->name('cse');

Route::get('/eee','EEEController@eee')->name('eee');

Route::get('/bba','BBAController@bba')->name('bba');

Route::get('/mba','MBAController@mba')->name('mba');

Route::get('/ece','ECEController@ece')->name('ece');

Route::get('/llb','LLBController@llb')->name('llb');

//All Teacher route are her......
Route::get('/allteacher','AllteacherController@allteacher')->name('allteacher');

Route::get('/addteacher','AddteacherController@addteacher')->name('addteacher');

Route::post('/store_teacher','AddteacherController@storeteacher')->name('storeteacher');

Route::get('/delete_teacher/{id}','AllteacherController@deleteteacher')->name('deleteteacher');
