<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginDashboard;
use Illuminate\Support\Facades\Redirect;
Session_start();
class AdminController extends Controller
{

    public function admin_login(){
        return view('admin.admin_login');
         }

    public function view_profile(){
        return view('admin/viewprofile');
         }

    public function setting(){
        return view('admin/setting');
         }
             
    public function logout(){
        Session::put('admin_email',NULL);
        Session::put('admin_id',NULL);
        return Redirect::to('/backend');
        }


    public function admin_dashboard(){
        return view('admin/dashboard');
    }

    public function admin_login_dashboard( Request $request){
        $email= $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();
        if($result){
            Session::put('admin_email',$request->admin_email);
            Session::put('admin_password',$request->admin_password);
            return redirect::to('/admin_dashboard');
        } else {
            Session::put('exception','Email Or Password Invalid');
            return redirect::to('/backend');
    	}
}
//======== Student part here ===================

        public function student_login(){
            return view('student.student_login');
        }

        
        public function student_dashboard(){
            return view('student.dashboard');
        }

        public function student_login_dashboard( Request $request){
            $email= $request->student_email;
            $password = md5($request->student_password);
            $result = DB::table('student_tbl')
            ->where('student_email',$email)
            ->where('student_password',$password)
            ->first();
            // echo "<pre>";
            // print_r($result);
            if($result){
                Session::put('student_email',$request->student_email);
                Session::put('student_password',$request->student_password);
                return redirect::to('/student_dashboard');
            } else {
                Session::put('exception','Email Or Password Invalid');
                return redirect::to('/');
            }
    }

}