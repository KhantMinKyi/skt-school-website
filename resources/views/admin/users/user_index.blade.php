@extends('layouts.admin_layout')

@section('content')

<div class="card">
    <div class="card-header font-weight-bold h5">Users</div>
    <div class="text-right m-4 ">
        <a href="" class="btn btn-success btn-md">
            Add New User
        </a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Username</th>
                <th>Gmail</th>
                <th>Phone</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->branch->branch_name}}</td>
                    <td>{{$user->user_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td class="d-flex justify-content-center">
                        <span class="animated-icon mr-2 ">
                            <div
                              style="width:14px;height:14px; cursor: pointer;"
                              data-animation-path="{{asset('admin/vendor/animated-icons/eye/eye.json')}}"
                              data-anim-loop="false"
                              title="view user"
                            ></div>
                          </span>
                        <span class="animated-icon mr-2 ">
                            <div
                              style="width:14px;height:14px; cursor: pointer;"
                              data-animation-path="{{asset('admin/vendor/animated-icons/edit/edit.json')}}"
                              data-anim-loop="false"
                              title="edit user"
                            ></div>
                          </span>
                        <span class="animated-icon mr-2 ">
                            <div
                              style="width:14px;height:14px; cursor: pointer;"
                              data-animation-path="{{asset('admin/vendor/animated-icons/restart/restart.json')}}"
                              data-anim-loop="false"
                              title="reset password"
                            ></div>
                          </span>
                        <span class="animated-icon mr-2 ">
                            <div
                              style="width:14px;height:14px; cursor: pointer;"
                              data-animation-path="{{asset('admin/vendor/animated-icons/trash-bin/trash-bin.json')}}"
                              data-anim-loop="false"
                              title="archive user"
                            ></div>
                          </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          {{$users->links()}}
        </div>
      </div>
    </div>
  </div>
@endsection