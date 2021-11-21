@extends("student_layout")
@php

      function convert_department($volue){
        $volues = [
        1=>'CSE',           
        2=>'EEE',           
        3=>'ECE',           
        4=>'BBA',           
        5=>'MBA',           
        6=>'LLB' ,          
      ];
      return $volues[$volue];
      }

 @endphp
@section('content')

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{asset($student_profile_info->student_image)}}">
                  <p class="name">{{$student_profile_info->student_name}}</p>
                  <p class="designation">{{$student_profile_info->student_roll}}</p>
                  <a class="email" href="#">{{$student_profile_info->student_email}}</a>
                  <a class="number" href="#">{{$student_profile_info->student_phone}}</a>
                </div>
                </div>
                <div class="card mb-4">
                <div class="card-body overview">
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of this student are give below:</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon icon-golbe">Father's Name:</i>
                      <span style="font-family: cursive; font-size:16px">{{$student_profile_info->student_fathername}}</span>
                    </a>
                    <a class="website">
                      <i class="icon icon-golbe">Mother's Name:</i>
                      <span style="font-family: cursive; font-size:16px">{{$student_profile_info->student_mothername}}</span>
                    </a>
                    <a class="website">
                      <i class="icon icon-golbe">Address:</i>
                      <span style="font-family: cursive; font-size:16px">{{$student_profile_info->student_address}}</span>
                    </a>
                    <a class="website">
                      <i class="icon icon-golbe">Department:</i>
                      <span style="font-family: cursive; font-size:16px">
                      {{convert_department($student_profile_info->student_department)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon icon-golbe">Admission Year:</i>
                      <span style="font-family: cursive; font-size:16px">{{$student_profile_info->student_admissionyear}}</span>
                    </a>
                </div>
                </div>
              </div>
            </div>
          </div>
  
@endsection