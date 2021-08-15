<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class LLBController extends Controller
{
    public function llb(){
        
        $llb_info = DB::table('student_tbl')->where(['student_department'=>6])->get();

        $manage_student = view('admin/subjects/llb')->with('llb_student_info',$llb_info);
        
        return view('layout')->with('llb',$manage_student);

    }
}
