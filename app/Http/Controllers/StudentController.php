<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
 
    //Student profile route are here....

    // public function studentprofile($id){
    //     // $student_id = Session::get('student_id');
    //     $student_profile_info = DB::table('student_tbl')
    //      ->select('*')
    //      ->where('student_id',$id)
    //      ->first();
    //      echo"</pre>";
    //      print_r( $student_profile_info);

        //  $manage_student_info = view('student.student_profile')
        //  ->with('student_profile_info',$student_profile_info);
        //  return view('student_layout')->with('student_profile',$manage_student_info);
    //  }

}
