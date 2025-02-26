@extends('layouts.staff_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Category Edit</div>
        <form action="{{ route('staff-categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Title </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter a Title " value="{{ $category->category_title }}"
                                    name="category_title" title="Title is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Description </label>
                            <div class="col-9">
                                <textarea name="category_description" class="form-control" cols="30" rows="10">{{ $category->category_description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('staff-categories.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
