@extends('layouts.admin_layout')

@section('content')
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tinymce.init({
                selector: '.tinymceBox',
                plugins: 'advlist autolink lists link charmap print preview anchor',
                toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
                height: 300,
            });
        });
    </script>
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit Statement - {{ $statement->branch->branch_name }}</div>
        <form action="{{ route('admin-statements.update', $statement->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Photo " value="{{ $statement->statement_photo }}"
                                    name="statement_photo" title="Photo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($statement->statement_photo) }}" width="120px" alt="old Photo"
                                    title="old Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="statement_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($statement->statement_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Our Vision </label>
                            <div class="col-9">
                                {{-- <textarea class="form-control" name="statement_vision" id="" cols="30" rows="5" required
                                    placeholder="Enter  Our Vision ">{{ $statement->statement_vision }}</textarea> --}}
                                <textarea class="form-control tinymceBox" name="statement_vision" required>{{ $statement->statement_vision }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Our Mission </label>
                            <div class="col-9">
                                {{-- <textarea class="form-control" name="statement_mission" id="" cols="30" rows="5" required
                                    placeholder="Enter  Our Mission ">{{ $statement->statement_mission }}</textarea> --}}
                                <textarea class="form-control tinymceBox" name="statement_mission" required>{{ $statement->statement_mission }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Our Philosophy </label>
                            <div class="col-9">
                                {{-- <textarea class="form-control" name="statement_philosophy" id="" cols="30" rows="5" required
                                    placeholder="Enter  Our Philosophy ">{{ $statement->statement_philosophy }}</textarea> --}}
                                <textarea class="form-control tinymceBox" name="statement_philosophy" required>{{ $statement->statement_philosophy }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-statements.index') }}" class="btn btn-light" data-bs-dismiss="modal">
                        Close
                    </a>
                    <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                        Edit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
