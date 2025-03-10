@extends('layouts.admin_layout')

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
    {{-- <div class="d-flex justify-content-end m-4 ">
        <a href="{{ route('admin-posts.index') }}" class="animated-icon d-flex justify-content-center align-items-center">
            <div style="width:14px;height:14px; cursor: pointer;" class="mx-2"
                data-animation-path="{{ asset('admin/vendor/animated-icons/restart/restart.json') }}" data-anim-loop="false"
                title="Delete Comment">
            </div>
            Go Back to Post Page
        </a>

    </div> --}}

    <div class="card">
        <div class="card-header font-weight-bold h5">Contact Forms </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Title</th>
                                <th>Body </th>
                                <th>Created Date </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>

                                    <td class="font-weight-bold">
                                        {{ $contact->contact_name }}
                                    </td>
                                    <td>{{ $contact->contact_email }}</td>
                                    <td>{{ $contact->contact_subject }}</td>
                                    <td>{{ $contact->contact_message }}</td>
                                    <td> Created - {{ date('d-m-Y h:s', strToTime($contact->created_at)) }}

                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <form action="{{ route('admin-contacts.destroy', $contact->id) }}"
                                                method="post" class="delete-comment-form ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="contact_id" value="{{ $contact->id }}">
                                                <button type="button"
                                                    class="btn-delete-comment form-control animated-icon">
                                                    <div style="width:14px;height:14px; cursor: pointer;"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/trash/trash.json') }}"
                                                        data-anim-loop="false" title="Delete Contact">
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $contacts->links() }}
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
