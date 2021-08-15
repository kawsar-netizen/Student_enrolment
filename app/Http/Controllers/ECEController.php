<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

class ECEController extends Controller
{
    public function ece(){
        
        $ece_info = DB::table('student_tbl')->where(['student_department'=>3])->get();

        $manage_student = view('admin/subjects/ece')->with('ece_student_info',$ece_info);
        
        return view('layout')->with('ece',$manage_student);

    }
}
