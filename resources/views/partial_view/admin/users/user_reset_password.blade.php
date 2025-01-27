@extends('layouts.admin_layout')
@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Reset Password - {{ $reset_password_user->name }}</div>
        {{-- <div class="card-body">
            {{ $reset_password_user }}

        </div> --}}
        <div class="card-body">
            <div class="text-center mb-5">
                <svg width="24" height="24" class="d-block m-auto">
                    <use xlink:href="#logo-icon"></use>
                </svg>
                <h4 class="mb-0 mt-3">Recover User password</h4>
                <p class="text-muted">
                    Enter User New Password to
                    reset User password.
                </p>
            </div>
            <form class="" action="{{ route('admin-users.user_reset_password') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" id="" value="{{ $reset_password_user->id }}">
                <div class="mb-4 form-group">
                    <label for="password" class="">New Password</label>
                    <input name="password" id="password" placeholder="New Password" minlength="6" type="password" required
                        class="form-control" />
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="mb-3 btn btn-success mr-2 ">
                        Reset password
                    </button>
                    <a href="{{ route('admin-users.index') }}" class="mb-3 btn btn-primary ">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
