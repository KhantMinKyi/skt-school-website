@extends('layouts.admin_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit Principal - {{ $principal_message->principal_name }}</div>
        <form action="{{ route('admin-principal-messages.update', $principal_message->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Photo "
                                    value="{{ $principal_message->principal_photo }}" name="principal_photo"
                                    title="Photo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($principal_message->principal_photo) }}" width="120px" alt="old Photo"
                                    title="old Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="principal_message_branch_id" required
                                    title="Branch is required">
                                    <option disabled selected>Select a Branch</option>
                                    @foreach ($branches as $key => $data)
                                        <option value='{{ $data->id }}'
                                            @if ($principal_message->principal_message_branch_id === $data->id) selected @endif>{{ $data->branch_name }}
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
                                <input type="text" placeholder="Choose Name "
                                    value="{{ $principal_message->principal_name }}" name="principal_name"
                                    title="Name is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Message </label>
                            <div class="col-9">
                                <textarea class="form-control" name="principal_message" id="" cols="30" rows="5" required
                                    placeholder="Enter Principal Message ">{{ $principal_message->principal_message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin-principal-messages.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
