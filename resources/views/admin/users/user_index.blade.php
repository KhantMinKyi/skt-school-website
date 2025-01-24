@extends('layouts.admin_layout')

@section('content')

<div class="card">
    <div class="card-header font-weight-bold h5">Users</div>
    <div class="text-right m-4 ">
      <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewUser">
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
  <div class="modal fade" tabindex="-1" id="modalNewUser">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
      <form action="{{route('admin-users.store')}}" method="post">
        @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
                <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <span class="svg-icon svg-icon-2x"><i class="fa-solid fa-xmark"></i></span>
                </button>
            </div>

            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                    <div class="col-sm-9">
                        <select class="form-control select2" name="branch_id" required title="Branch is required">
                            <option disabled selected>Select a Branch</option>
                            @foreach($branches as $key => $data)
                            <option value='{{$data->id}}'>{{$data->branch_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label"> Name </label>
                        <div class="col-9">
                            <input type="text" placeholder="Enter a full name " value=""
                                name="name" title="Name is required" required class="form-control">
                        </div>

                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label"> Gender </label>
                        <div class="col-9">
                            <select class="form-control select2" name="gender" required title="Gender is required">
                                <option disabled selected> Select a Gender</option>
                                <option value="Male"> Male </option>
                                <option value="Female"> Female </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label"> Birth Date
                        </label>
                        <div class="col-9">
                            <input type="date" placeholder=" Enter a Birth Date " name="birth_date"
                            class="form-control">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-3 col-form-label"> Mobile Phone
                        </label>
                        <div class="col-9">
                            <input type="text" placeholder="ex: 017 000000" name="phone"
                            title=" Enter a Phone Number " required class="form-control">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-3 col-form-label"> Email </label>
                        <div class="col-9">
                            <input type="email" placeholder=" Enter an Email " name="email"
                            id="account_email" required class="form-control">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-3 col-form-label"> Account </label>
                          <div class="col-5">
                            <input type="text" placeholder=" Enter Username "
                            title=" Username " name="user_name" id="user_name" required
                            class="form-control">
                          </div>
                          <div class="col-4">
                            <input type="text" placeholder=" Enter Password " name="password"
                                id="password" minlength="6" title=" Password "
                                required class="form-control">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputEmail3" class="col-3 col-form-label"> User Type </label>
                              <div class="col-9">
                                  <select class="form-control select2" name="user_type" required title="User Type is required">
                                      <option disabled selected> Select a User Type</option>
                                      <option value="admin"> Admin </option>
                                      <option value="staff"> Staff </option>
                                  </select>
                              </div>
                          </div>
                          </div>
                  
                          
                          {{-- <div class="col-3">
                    <img src="/data/user.jpg" class='userPhotoPreview' style="width: 100%;" />
                    <input type="file" class="form-control" id="userPhoto" name="photo" required
                        title=" User Photo " style="margin-top: 10px;" />
                </div> --}}
            </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                    Create 
                </button>
            </div>
          </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

@endsection