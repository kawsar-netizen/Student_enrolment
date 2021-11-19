@extends('layout')
@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All Teacher</h2>
              <p class="alert-success"><?php
                            $message = Session::get('exception');
                            if($message){
                                echo $message;
                                Session::put('exception',null);
                            }
                            ?>
                          </p>
              <div class="row table-responsive">
                <div class="col-12 col-lg-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>S.No </th>
                          <th>T_Name </th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($all_teacher_info as $v_teacher)
                      <tr>
                          <td>{{$loop->index+1}}</td>
                          <td>{{$v_teacher->teachers_name}}</td>     
                          <td>{{$v_teacher->teachers_phone}}</td>
                          <td><img src="{{URL::to($v_teacher->teachers_image)}}" height="80" width="100" style ="border-radius:50% "alt=""></td>
                          <td>{{$v_teacher->teachers_address}}</td>
                          <td>
                           @if($v_teacher->teachers_department == 1)
                           <span class="lable label-success">{{'CSE'}}</span>

                           @elseif($v_teacher->teachers_department == 2)
                           <span class="lable label-primary">{{'EEE'}}</span>

                           @elseif($v_teacher->teachers_department == 3)
                           <span class="lable label-info">{{'ECE'}}</span>

                           @elseif($v_teacher->teachers_department == 4)
                           <span class="lable label-warning">{{'BBA'}}</span>

                           @elseif($v_teacher->teachers_department == 5)
                           <span class="lable label-secondary">{{'MBA'}}</span>

                           @elseif($v_teacher->teachers_department == 6)
                           <span class="lable label-danger">{{'LLB'}}</span>
                           @else
                           <span class="lable label-importent">{{'Not Defined'}}</span>
                           @endif
                          </td>
                          <td>
                            <a href="{{URL::to('/teachers_view/'.$v_teacher->teachers_id)}}"><button class="btn btn-outline-primary">View</button></a><br><br>
                            <a href="{{URL::to('/teachers_edit/'.$v_teacher->teachers_id)}}"><button class="btn btn-outline-warning">Edit</button></a><br><br>
                            <a href="{{URL::to('/delete_teacher/'.$v_teacher->teachers_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection