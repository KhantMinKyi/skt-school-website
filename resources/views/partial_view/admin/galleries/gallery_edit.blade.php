@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit Gallery - {{ $gallery->gallery_title }}</div>
        <form action="{{ route('admin-galleries.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Photo " value="{{ $gallery->gallery_photo }}"
                                    name="gallery_photo" title="Photo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($gallery->gallery_photo) }}" width="120px" alt="old Photo"
                                    title="old Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="gallery_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($gallery->gallery_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Title </label>
                            <div class="col-9">
                                <input type="text" placeholder="Choose Title " value="{{ $gallery->gallery_title }}"
                                    name="gallery_title" title="Title is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Category</label>
                            <div class="col-9">
                                <select class="form-control select2" name="gallery_category" required
                                    title="Class is required">
                                    <option disabled selected>Select a Class</option>
                                    <option @if ($gallery->gallery_category == 'building') selected @endif value='building'>Building
                                    </option>
                                    <option @if ($gallery->gallery_category == 'class') selected @endif value='class'>Class </option>
                                    <option @if ($gallery->gallery_category == 'lab') selected @endif value='lab'>Lab
                                    </option>
                                    <option @if ($gallery->gallery_category == 'playground') selected @endif value='playground'>Playground
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-galleries.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
