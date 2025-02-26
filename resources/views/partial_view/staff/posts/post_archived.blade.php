@extends('layouts.staff_layout')

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
                            @foreach ($archived_posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td class="font-weight-bold">{{ $post->post_title }}</td>
                                    <td>{{ $post->branch->branch_name }}</td>
                                    <td>{{ $post->created_user->name }}</td>
                                    <td>{{ $post->category->category_title }}</td>
                                    <td> Created - {{ date('d-m-Y h:s', strToTime($post->created_at)) }} <br>
                                        Last Updated - {{ date('d-m-Y h:s', strToTime($post->updated_at)) }}
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('staff-posts.archived_post', $post->id) }}?status=1"
                                                onclick="return confirm('Are you sure you want to Restore this Post?');"
                                                class="animated-icon mr-2 ">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/restart/restart.json') }}"
                                                    data-anim-loop="false" title="Restore Post"></div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $archived_posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
