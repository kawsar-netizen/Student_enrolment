<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudnet(){
        $allstudent_info = DB::table('student_tbl')->get();

        $manage_student = view('admin/allstudent')->with('all_student_info',$allstudent_info);
        
        return view('layout')->with('allstudent',$manage_student);

        //return view('admin/allstudent');
    }

    //Student view route are here....

    public function studentview($id){
       $student_view_info = DB::table('student_tbl')
        ->select('*')
        ->where('student_id',$id)
        ->first();
        $manage_student_info = view('admin/student_view')
        ->with('student_view_info',$student_view_info);
        return view('layout')->with('student_view',$manage_student_info);
    }

    //Student edit route are here....

    public function studentedit($id){
        $student_update_info = DB::table('student_tbl')
        ->select('*')
        ->where('student_id',$id)
        ->first();
    $manage_update_info = view('admin/student_edit')
    ->with('update_info',$student_update_info);
    return view('layout')->with('manage_update_info',$manage_update_info);
     }
    //Student update route are here....

     public function studentupdate( Request $request,$id){
         $data = array();
         $data['student_name'] = $request->student_name;
         $data['student_fathername'] = $request->student_fathername;
         $data['student_mothername'] = $request->student_mothername;
         $data['student_roll'] = $request->student_roll;
         $data['student_phone'] = $request->student_phone;
         $data['student_address'] = $request->student_address;
         $data['student_email'] = $request->student_email;
         $data['student_password'] = $request->student_password;
         $data['student_admissionyear'] = $request->student_admissionyear;
        DB::table('student_tbl')
        ->where('student_id',$id)
        ->update($data);
        Session::put('exception','Student Update Successfully');
        return Redirect::to('/allstudnet');
         
     }

    //Student delete route are here....

    public function student_delete($id){
        DB::table('student_tbl')->where('student_id',$id)
        ->delete();
        return Redirect::to('/allstudnet');

    }
}
