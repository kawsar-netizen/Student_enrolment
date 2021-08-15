<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AddteacherController extends Controller
{
    public function addteacher(){
        return view('admin/addteacher');
    }
    
    public function storeteacher(Request $request){
    
        $data = array();
        $data['teachers_name'] = $request->teachers_name;
        $data['teachers_phone'] = $request->teachers_phone;
        $data['teachers_address'] = $request->teachers_address;
        $data['teachers_department'] = $request->teachers_department;
        $image = $request->file('teachers_image');
        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = "image/";
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['teachers_image'] = $image_url;
                DB::table('teacher_tbl')->insert($data);
                Session::put('exception','Teacher Added Successfully !!');
                return Redirect::to('/allteacher');
            }
        }
     }
}
