@extends('layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  @php
                  $studnet = DB::table('student_tbl')
                  ->count("student_id"); 
                  @endphp
                  <h2 class="card-title" style="text-align:center;">All Student</h2>
                  <p style="font-family:cursive; font-size:26px; font-width:bold; text-align: center;">{{$studnet}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                @php
                  $teacher = DB::table('teacher_tbl')
                  ->count("teachers_id"); 
                  @endphp
                  <h2 class="card-title" style="text-align:center;">All Teacher</h2>
                  <p style="font-family:cursive; font-size:26px; font-width:bold; text-align: center;">{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="text-align:center;"> Tution Free</h2>
                  <p style="font-family:cursive; font-size:26px; font-width:bold; text-align: center;">Monthly:2500tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title" style="text-align:center;">Revenue</h2>
                  <p style="font-family:cursive; font-size:26px; font-width:bold; text-align: center;">Revenue</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          </div>
@endsection