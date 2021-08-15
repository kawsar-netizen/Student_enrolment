<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class CSEController extends Controller
{
    public function cse(){
        
        $cse_info = DB::table('student_tbl')->where(['student_department'=>1])->get();
    
        $manage_student = view('admin/subjects/cse')->with('cse_student_info',$cse_info);
        
        return view('layout')->with('cse',$manage_student);
    
    // return view('admin/subjects/cse');
    }
}
