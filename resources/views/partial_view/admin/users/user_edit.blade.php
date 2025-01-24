@extends('layouts.admin_layout')
@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">User Edit Form - ( {{ $user->name }} )</div>
        <form action="{{ route('admin-users.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="branch_id" required title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($data->id === $user->branch_id) selected @endif>
                                            {{ $data->branch_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Name </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter a full name " value="{{ $user->name }}"
                                    name="name" title="Name is required" required class="form-control">
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Gender </label>
                            <div class="col-9">
                                <select class="form-control select2" name="gender" required title="Gender is required">
                                    <option disabled selected> Select a Gender</option>

                                    <option value="male" @if ($user->gender === 'male') selected @endif> Male </option>
                                    <option value="female" @if ($user->gender === 'female') selected @endif> Female
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Birth Date
                            </label>
                            <div class="col-9">
                                <input type="date" placeholder=" Enter a Birth Date " name="birth_date"
                                    value="{{ $user->birth_date }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Mobile Phone
                            </label>
                            <div class="col-9">
                                <input type="text" placeholder="ex: 017 000000" name="phone"
                                    value="{{ $user->phone }}" title=" Enter a Phone Number " required
                                    class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Email </label>
                            <div class="col-9">
                                <input type="email" placeholder=" Enter an Email " name="email"
                                    value="{{ $user->email }}" id="account_email" required class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Account </label>
                            <div class="col-9">
                                <input type="text" placeholder=" Enter Username " value="{{ $user->user_name }}"
                                    title=" Username " name="user_name" id="user_name" required class="form-control">
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> User Type </label>
                            <div class="col-9">
                                <select class="form-control select2" name="user_type" required
                                    title="User Type is required">
                                    <option disabled selected> Select a User Type</option>
                                    <option value="admin" @if ($user->user_type === 'admin') selected @endif> Admin
                                    </option>
                                    <option value="staff" @if ($user->user_type === 'staff') selected @endif> Staff
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-users.index') }}" class="btn btn-light" data-bs-dismiss="modal">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                </div>
        </form>
    </div>
    </div>
@endsection
