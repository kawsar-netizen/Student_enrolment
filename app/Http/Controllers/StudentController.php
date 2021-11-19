<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function studentProfile(){
        $student_id = Session::get('student_id');
        $student_view_info = DB::table('student_tbl')
        ->select('*')
        ->where('student_id',$student_id)
        ->first();
        echo "</pre>";
        print_r($student_view_info);
        // $manage_student_info = view('student.student_view')
        // ->with('student_view_info',$student_view_info);
        // return view('layout')->with('student_view',$manage_student_info);

    }
}
