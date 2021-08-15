<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class MBAController extends Controller
{
    public function mba(){
        
        $mba_info = DB::table('student_tbl')->where(['student_department'=>5])->get();
    
        $manage_student = view('admin/subjects/mba')->with('mba_student_info',$mba_info);
        
        return view('layout')->with('mba',$manage_student);
    
    // return view('admin/subjects/cse');
    }
}
