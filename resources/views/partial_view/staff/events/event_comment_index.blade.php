@extends('layouts.staff_layout')

@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show w-50 mx-auto text-center" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show w-50 mx-auto text-center" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-end m-4 ">
        <a href="{{ route('staff-events.index') }}" class="animated-icon d-flex justify-content-center align-items-center">
            <div style="width:14px;height:14px; cursor: pointer;" class="mx-2"
                data-animation-path="{{ asset('admin/vendor/animated-icons/restart/restart.json') }}" data-anim-loop="false"
                title="Delete Comment">
            </div>
            Go Back to Event Page
        </a>

    </div>

    <div class="card">
        <div class="card-header font-weight-bold h5">Comments</div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Event</th>
                                <th>Branch</th>
                                <th>Title</th>
                                <th>Body </th>
                                <th>Date </th>
                                <th>Status </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event_comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>

                                    <td class="font-weight-bold">
                                        {{ $comment->event->event_title }}
                                    </td>
                                    <td>{{ $comment->branch->branch_name }}</td>
                                    <td>{{ $comment->event_comment_subject }}</td>
                                    <td>{{ $comment->event_comment_body }}</td>
                                    <td> Created - {{ date('d-m-Y h:s', strToTime($comment->created_at)) }}
                                    <td class="text-center">
                                        @if ($comment->event_comment_status == 'approved')
                                            <span class="badge badge-success p-2">Approved</span>
                                        @elseif($comment->event_comment_status == 'pending')
                                            <span class="badge badge-warning p-2">Pending</span>
                                        @else
                                            <span class="badge badge-danger p-2">Canceled</span>
                                        @endif
                                    </td>
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <form action="{{ route('staff-event-comments.change_comment_status') }}"
                                                method="post">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="event_comment_id" id=""
                                                    value="{{ $comment->id }}">
                                                <select name="event_comment_status" class="form-control comment-status"
                                                    data-comment-id="{{ $comment->id }}">
                                                    <option value="canceled"
                                                        @if ($comment->event_comment_status == 'canceled') selected @endif>Canceled
                                                    </option>
                                                    <option value="pending"
                                                        @if ($comment->event_comment_status == 'pending') selected @endif>Pending
                                                    </option>
                                                    <option value="approved"
                                                        @if ($comment->event_comment_status == 'approved') selected @endif>Approved
                                                    </option>
                                                </select>
                                            </form>
                                            <form action="{{ route('staff-event-comments.destroy', $comment->id) }}"
                                                method="post" class="delete-comment-form ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="event_comment_id" value="{{ $comment->id }}">
                                                <button type="button"
                                                    class="btn-delete-comment form-control animated-icon">
                                                    <div style="width:14px;height:14px; cursor: pointer;"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/trash/trash.json') }}"
                                                        data-anim-loop="false" title="Delete Comment">
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $event_comments->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".comment-status").change(function() {
                $(this).closest("form").submit();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".btn-delete-comment").forEach(function(button) {
                button.addEventListener("click", function() {
                    let form = this.closest("form");

                    if (confirm("Are you sure you want to delete this comment?")) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection
