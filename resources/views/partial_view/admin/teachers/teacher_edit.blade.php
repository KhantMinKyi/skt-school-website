@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit Teacher - {{ $teacher->branch->branch_name }}</div>
        <form action="{{ route('admin-teachers.update', $teacher->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Photo " value="{{ $teacher->teacher_photo }}"
                                    name="teacher_photo" title="Photo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($teacher->teacher_photo) }}" width="240px" alt="old Photo"
                                    title="old Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="teacher_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($teacher->teacher_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Name </label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="teacher_name"
                                    placeholder="Enter Teacher Name " value="{{ $teacher->teacher_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Class</label>
                            <div class="col-9">
                                <select class="form-control select2" name="teacher_class" required
                                    title="Class is required">
                                    <option disabled selected>Select a Class</option>
                                    <option @if ($teacher->teacher_class == 'assistant') selected @endif value='assistant'>Assistant
                                    </option>
                                    <option @if ($teacher->teacher_class == 'kg') selected @endif value='kg'>KG </option>
                                    <option @if ($teacher->teacher_class == 'primary') selected @endif value='primary'>Primary
                                    </option>
                                    <option @if ($teacher->teacher_class == 'lower-secondary') selected @endif value='lower-secondary'>Lower
                                        Secondary</option>
                                    <option @if ($teacher->teacher_class == 'secondary') selected @endif value='secondary'>Secondary
                                    </option>
                                    <option @if ($teacher->teacher_class == 'principal') selected @endif value='principal'>Principal
                                    </option>
                                    <option @if ($teacher->teacher_class == 'vice-principal') selected @endif value='vice-principal'>Vice
                                        Principal
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-teachers.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
