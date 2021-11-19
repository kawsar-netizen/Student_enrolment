@extends("layout")
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
                  <img src="{{asset($teacher_info->teachers_image)}}">
                  <p class="name">{{$teacher_info->teachers_name}}</p>
                  <p class="designation">                      @if($teacher_info->teachers_department == 1)
                           <span class="lable label-success">{{'CSE'}}</span>

                           @elseif($teacher_info->teachers_department == 2)
                           <span class="lable label-primary">{{'EEE'}}</span>

                           @elseif($teacher_info->teachers_department == 3)
                           <span class="lable label-info">{{'ECE'}}</span>

                           @elseif($teacher_info->teachers_department == 4)
                           <span class="lable label-warning">{{'BBA'}}</span>

                           @elseif($teacher_info->teachers_department == 5)
                           <span class="lable label-secondary">{{'MBA'}}</span>

                           @elseif($teacher_info->teachers_department == 6)
                           <span class="lable label-danger">{{'LLB'}}</span>
                           @else
                           <span class="lable label-importent">{{'Not Defined'}}</span>
                           @endif</p>
                  <a class="email" href="#">{{$teacher_info->teachers_address}}</a>
                  <a class="number" href="#">{{$teacher_info->teachers_phone}}</a>
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
                      <i class="icon icon-golbe">Teacher Name:</i>
                      <span style="font-family: cursive; font-size:16px">{{$teacher_info->teachers_name}}</span>
                    </a>
                    <a class="website">
                      <i class="icon icon-golbe">Teacher Department:</i>
                      <span style="font-family: cursive; font-size:16px">
                      @if($teacher_info->teachers_department == 1)
                           <span class="lable label-success">{{'CSE'}}</span>

                           @elseif($teacher_info->teachers_department == 2)
                           <span class="lable label-primary">{{'EEE'}}</span>

                           @elseif($teacher_info->teachers_department == 3)
                           <span class="lable label-info">{{'ECE'}}</span>

                           @elseif($teacher_info->teachers_department == 4)
                           <span class="lable label-warning">{{'BBA'}}</span>

                           @elseif($teacher_info->teachers_department == 5)
                           <span class="lable label-secondary">{{'MBA'}}</span>

                           @elseif($teacher_info->teachers_department == 6)
                           <span class="lable label-danger">{{'LLB'}}</span>
                           @else
                           <span class="lable label-importent">{{'Not Defined'}}</span>
                           @endif
                    </a>
                    <a class="website">
                      <i class="icon icon-golbe">Address:</i>
                      <span style="font-family: cursive; font-size:16px">{{$teacher_info->teachers_address}}</span>
                    </a>
                </div>
                </div>
              </div>
            </div>
          </div>
  
@endsection