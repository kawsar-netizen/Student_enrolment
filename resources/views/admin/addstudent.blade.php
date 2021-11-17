@extends('layout')
@section('content')
<div class="col-12 col-lg-8 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student</h2>
                          <p class="alert-success"><?php
                            $message = Session::get('exception');
                            if($message){
                                echo $message;
                                Session::put('exception',null);
                            }
                            ?>
                          </p>
                          <form class="forms-sample" method="post" action="{{URL::to('save_studnet')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Father's name</label>
                                  <input type="text" class="form-control p-input" name="student_fathername" aria-describedby="emailHelp" placeholder="Enter Student Father Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Mother's name</label>
                                  <input type="text" class="form-control p-input" name="student_mothername" aria-describedby="emailHelp" placeholder="Enter Student Mother Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" placeholder="Enter Student Roll">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp" placeholder="Enter Student Phone No">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp" placeholder="Enter Student Address">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="Enter Student Email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp" placeholder="Enter Student Password">
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-sm-4 col-form-label">Upload file</label>
                                  <div class="col-sm-8">
                                    <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                    <input type="file" class="form-control-file" name="student_image" id="exampleInputFile" aria-describedby="fileHelp2">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp" placeholder="Enter Student Admission Year">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Department</label>
                                  <select class="form-control p-input" name="student_department">
                                      <option value="1">CSE</option>
                                      <option value="2">EEE</option>
                                      <option value="3">ECE</option>
                                      <option value="4">BBA</option>
                                      <option value="5">MBA</option>
                                      <option value="6">LLB</option>
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection