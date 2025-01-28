@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Archived Branches</div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Branch Name</th>
                                <th>Short Name</th>
                                <th>Location</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($archived_branches as $branch)
                                <tr>
                                    <td>{{ $branch->id }}</td>
                                    <td>
                                        <img src="{{ asset($branch->branch_logo) }}" alt="" width="80px">
                                    </td>
                                    <td>{{ $branch->branch_name }}</td>
                                    <td>{{ $branch->branch_short_name }}</td>
                                    <td>{{ $branch->branch_location }}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('admin-branches.archived_branch', $branch->id) }}?status=1"
                                                onclick="return confirm('Are you sure you want to restore this branch?');"
                                                class="animated-icon mr-2 ">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/restart/restart.json') }}"
                                                    data-anim-loop="false" title="restore branch"></div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $archived_branches->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
