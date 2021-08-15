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


    public function deleteteacher($id){
        DB::table('teacher_tbl')->where('teachers_id',$id)
        ->delete();
        return Redirect::to('allteacher');
    }

}
