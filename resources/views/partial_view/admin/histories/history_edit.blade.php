@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit History - {{ $history->history_title }}</div>
        <form action="{{ route('admin-histories.update', $history->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Photo " value="{{ $history->history_photo }}"
                                    name="history_photo" title="Photo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($history->history_photo) }}" width="120px" alt="old Photo"
                                    title="old Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="history_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($history->history_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
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
                                <input type="text" placeholder="Choose Name " value="{{ $history->history_title }}"
                                    name="history_title" title="Name is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Body </label>
                            <div class="col-9">
                                <textarea class="form-control" name="history_body" id="" cols="30" rows="5" required
                                    placeholder="Enter History Body ">{{ $history->history_body }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-histories.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
