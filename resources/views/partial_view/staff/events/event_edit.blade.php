@extends('layouts.staff_layout')

@section('content')
    <div class="card">
        <div class="card-header font-weight-bold h5">Edit Event - {{ $event->event_title }}</div>
        <form action="{{ route('staff-events.update', $event->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Banner </label>
                            <div class="col-6">
                                <input type="file" placeholder="Choose Banner " value="{{ $event->event_banner }}"
                                    name="event_banner" title="Logo is required" class="form-control">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($event->event_banner) }}" width="120px" alt="old banner"
                                    title="old banner">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="event_branch_id" value="{{ $event->event_branch_id }}">
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Category</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="event_category_id" required
                                    title="Category is required">
                                    <option disabled selected>Select a Category</option>
                                    @foreach ($categories as $key => $category)
                                        <option value='{{ $category->id }}'
                                            @if ($event->event_category_id === $category->id) selected @endif>
                                            {{ $category->category_title }}
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
                                <input type="text" placeholder="Choose Title " value="{{ $event->event_title }}"
                                    name="event_title" title="Title is required" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Body </label>
                            <div class="col-9">
                                <textarea class="form-control" name="event_body" id="" cols="30" rows="5" required
                                    placeholder="Enter Event Body ">{{ $event->event_body }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Video </label>
                            <div class="col-9">
                                <span><small>You can add video link if there is a video</small></span>
                                <input type="text" placeholder="Choose Event Video Link (Optional)"
                                    value="{{ $event->event_video }}" name="event_video" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Image </label>
                            <div class="col-9">
                                <span><small>You can add an image link if there is an image</small></span>
                                <input type="text" placeholder="Choose Event Image Link (Optional)"
                                    value="" name="event_image" class="form-control">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Images </label>
                            <div class="col-9 mb-3">
                                <input type="file" placeholder="Choose Banner " value="{{ $event->event_image }}"
                                    name="event_image[]" title="Logo is required" class="form-control" multiple>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-6">
                                @php
                                    $event_images = explode(',', $event->event_image);
                                @endphp
                                @foreach ($event_images as $event_image)
                                    <img src="{{ asset($event_image) }}" width="120px" alt="old banner"
                                        title="old banner">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> From/To Date </label>
                            <div class="col-4">
                                <input type="date" placeholder="Choose Event Start Date"
                                    value="{{ $event->event_start_date }}" name="event_start_date" class="form-control"
                                    required>
                            </div>
                            <div class="col-5">
                                <input type="date" placeholder="Choose Event End Date"
                                    value="{{ $event->event_end_date }}" name="event_end_date" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Time </label>
                            <div class="col-9">
                                <input type="text" placeholder="1PM - 5PM" value="{{ $event->event_time }}"
                                    name="event_time" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Location </label>
                            <div class="col-9">
                                <input type="text" placeholder="Enter Event Location"
                                    value="{{ $event->event_location }}" name="event_location" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Registration Free </label>
                            <div class="col-9">
                                <input type="text" placeholder="You can write free if there is no registration fee"
                                    value="{{ $event->event_registration_fee }}" name="event_registration_fee"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-3 col-form-label"> Will Show at the Landing Page ?
                            </label>
                            <div class="col-9">
                                <input type="checkbox" name="event_is_show_front" id="" value="1"
                                    @if ($event->event_is_show_front == 1) checked @endif>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="{{ route('staff-events.index') }}" class="btn btn-light" data-bs-dismiss="modal">
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
