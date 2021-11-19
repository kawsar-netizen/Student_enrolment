@extends('student_layout')
@section('content')
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your Profile</h2>
                          <p class="alert-success"><?php
                            $message = Session::get('exception');
                            if($message){
                                echo $message;
                                Session::put('exception',null);
                            }
                            ?>
                          </p>
                          <form class="forms-sample" method="post" action="">
                              @csrf
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" aria-describedby="emailHelp"value="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address" aria-describedby="emailHelp"value="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" aria-describedby="emailHelp"value=""
                                  >
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection