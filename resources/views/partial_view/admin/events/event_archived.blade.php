@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Archived Posts</div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Branch</th>
                                <th>Created By</th>
                                <th>Category </th>
                                <th>Date </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($archived_events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td class="font-weight-bold">{{ $event->event_title }}</td>
                                    <td>{{ $event->branch->branch_name }}</td>
                                    <td>{{ $event->created_user->name }}</td>
                                    <td>{{ $event->category->category_title }}</td>
                                    <td> Created - {{ date('d-m-Y h:s', strToTime($event->created_at)) }} <br>
                                        Last Updated - {{ date('d-m-Y h:s', strToTime($event->updated_at)) }}
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('admin-events.archived_event', $event->id) }}?status=1"
                                                onclick="return confirm('Are you sure you want to Restore this Event?');"
                                                class="animated-icon mr-2 ">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/restart/restart.json') }}"
                                                    data-anim-loop="false" title="Restore Event"></div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $archived_events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
