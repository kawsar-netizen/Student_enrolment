<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AllteacherController extends Controller
{
    public function allteacher(){

        $all_teacher_info = DB::table('teacher_tbl')->get();

        $manage_teacher = view('admin/allteacher')->with('all_teacher_info',$all_teacher_info);

        return view('layout')->with('allteacher',$manage_teacher);

            // return view('admin/allteacher');
    }

    public function teacherview($id){
        $teacher_info = DB::table('teacher_tbl')
        ->select('*')
        ->where('teachers_id',$id)
        ->first();
        $manage_teacher_info = view('admin/teachers_view')
        ->with('teacher_info',$teacher_info);
        return view('layout')->with('teachers_view',$manage_teacher_info);
    }

    public function teacherEdit($id){
        $update_info = DB::table('teacher_tbl')
        ->select('*')
        ->where('teachers_id',$id)
        ->first();
        $manage_update_info = view('admin/teachers_edit')
        ->with('update_info',$update_info);
        return view('layout')->with('manage_update_info',$manage_update_info);

    }

    public function teacherUpdate(Request $request,$id){
        $data = array();
        $data['teachers_name'] = $request->teachers_name;
        $data['teachers_phone'] = $request->teachers_phone;
        $data['teachers_address'] = $request->teachers_address;
       DB::table('teacher_tbl')
       ->where('teachers_id',$id)
       ->update($data);
       Session::put('exception','Student Update Successfully');
       return Redirect::to('/allteacher');
    }


    public function deleteteacher($id){
        DB::table('teacher_tbl')->where('teachers_id',$id)
        ->delete();
        return Redirect::to('allteacher');
    }

}
