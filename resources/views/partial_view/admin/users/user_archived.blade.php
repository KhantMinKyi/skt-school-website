@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Archived Users</div>
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
                            @foreach ($archived_users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->branch->branch_name }}</td>
                                    <td>{{ $user->user_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('admin-users.archived_user', $user->id) }}?status=1"
                                            onclick="return confirm('Are you sure you want to restore this user?');"
                                            class="animated-icon mr-2 ">
                                            <div style="width:14px;height:14px; cursor: pointer;"
                                                data-animation-path="{{ asset('admin/vendor/animated-icons/restart/restart.json') }}"
                                                data-anim-loop="false" title="restore user"></div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $archived_users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
