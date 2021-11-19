@extends('layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>
                          <p class="alert-success"><?php
                            $message = Session::get('exception');
                            if($message){
                                echo $message;
                                Session::put('exception',null);
                            }
                            ?>
                          </p>
                          <form class="forms-sample" method="post" action="{{URL::to('store_teacher')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp" placeholder="Enter Teacher Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp" placeholder="Enter Teacher Phone No">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" aria-describedby="emailHelp" placeholder="Enter Teacher Address">
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-sm-4 col-form-label">Upload file</label>
                                  <div class="col-sm-8">
                                    <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                    <input type="file" class="form-control-file" name="teachers_image" id="exampleInputFile" aria-describedby="fileHelp2">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Department</label>
                                  <select class="form-control p-input" name="teachers_department">
                                      <option value="1">CSE</option>
                                      <option value="2">EEE</option>
                                      <option value="3">ECE</option>
                                      <option value="4">BBA</option>
                                      <option value="5">MBA</option>
                                      <option value="6">LLB</option>
                                  </select>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Add Teacher</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection