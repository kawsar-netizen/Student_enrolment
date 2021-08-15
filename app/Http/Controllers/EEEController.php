<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class EEEController extends Controller
{
    public function eee(){
        
        $eee_info = DB::table('student_tbl')->where(['student_department'=>2])->get();

        $manage_student = view('admin/subjects/eee')->with('eee_student_info',$eee_info);
        
        return view('layout')->with('eee',$manage_student);

    }
}
