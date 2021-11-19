@extends('layout')
@section('content')
<div class="col-12 col-lg-8 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Teacher</h2>
                          <p class="alert-success"><?php
                            $message = Session::get('exception');
                            if($message){
                                echo $message;
                                Session::put('exception',null);
                            }
                            ?>
                          </p>
                          <form class="forms-sample" method="post" action="{{URL::to('/teachers_update',$update_info->teachers_id)}}">
                              {{@csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" name="teachers_name" aria-describedby="emailHelp"
                                  value="{{($update_info->teachers_name)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" name="teachers_phone" aria-describedby="emailHelp"
                                  value="{{($update_info->teachers_phone)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" name="teachers_address" aria-describedby="emailHelp"
                                  value="{{($update_info->teachers_address)}}">
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection