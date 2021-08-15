<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class BBAController extends Controller
{
    public function bba(){
        
        $bba_info = DB::table('student_tbl')->where(['student_department'=>4])->get();

        $manage_student = view('admin/subjects/bba')->with('bba_student_info',$bba_info);
        
        return view('layout')->with('bba',$manage_student);

    // return view('admin/subjects/cse');
 }
}