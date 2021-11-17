<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\LoginDashboard;
use Illuminate\Support\Facades\Redirect;
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
        return Redirect::to('/');
        }


    public function admin_dashboard(){
        return view('admin/dashboard');
    }

    public function login_dashboard( Request $request){
    	$data = $request->only('admin_email', 'admin_password');

    	if ($data) {
    		return redirect()->intended('/admin_dashboard');
    	} else {
    		return redirect()->route('admin_login')->withErrors(['Invalid username and password']);
    	}
}
}