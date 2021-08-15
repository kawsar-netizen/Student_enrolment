<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();
class AdminController extends Controller
{

    public function student_login(){
        return view('student_login');
         } 

    public function admin_login(){
        return view('admin/admin_login');
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

    public function login_dashboard( Request $request){
        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();
        // print_r($result);
        if($result){
            Session::put('admin_email',$request->admin_email);
            Session::put('admin_id',$request->admin_id);
             return Redirect::to('/admin_dashboard');   
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        }
    }
}
