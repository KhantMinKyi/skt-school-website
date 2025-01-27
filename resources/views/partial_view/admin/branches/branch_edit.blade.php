@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Branches</div>
        <form action="{{ route('admin-branches.update', $branch->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Logo </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Logo " value="{{ $branch->branch_logo }}"
                                    name="branch_logo" title="Logo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($branch->branch_logo) }}" width="120px" alt="old logo" title="old logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Name </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter a full name " value="{{ $branch->branch_name }}"
                                    name="branch_name" title="Name is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Short Name </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter a short name "
                                    value="{{ $branch->branch_short_name }}" name="branch_short_name"
                                    title="Short Name is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Location </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter a Location " value="{{ $branch->branch_location }}"
                                    name="branch_location" title="Location is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Description </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter a description "
                                    value="{{ $branch->branch_description }}" name="branch_description"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-branches.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
