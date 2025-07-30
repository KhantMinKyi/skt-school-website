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
        <div class="card-header font-weight-bold h5">Events</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewEvent">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Event"></div>
                    </span>
                    Add New Event
                </div>
            </a>
            <a href="{{ route('admin-events.show_archived_event') }}" class="btn btn-secondary btn-md">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/open-box/open-box.json') }}"
                            data-anim-loop="false"></div>
                    </span>
                    Archived Events
                </div>
            </a>
            <a href="{{ route('admin-event-comments.index') }}" class="btn btn-primary btn-md position-relative">
                <div class="d-flex align-items-center">
                    <span class="animated-icon mr-2">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/typing/typing.json') }}"
                            data-anim-loop="false">
                        </div>
                    </span>
                    Comments
                    @if ($pendingCommentsCount > 0)
                        <span class="badge badge-danger position-absolute top-0 start-100 translate-middle rounded-circle">
                            {{ $pendingCommentsCount }}
                        </span>
                    @endif
                </div>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- <th>Banner</th> --}}
                                <th>Title</th>
                                <th>Branch</th>
                                <th>Created By</th>
                                <th>Category </th>
                                <th>Location </th>
                                <th>Date </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    {{-- <td>
                                        <img src="{{ asset($event->event_banner) }}" alt="" width="80px">
                                    </td> --}}
                                    <td class="font-weight-bold">
                                        <a href="{{ route('admin-events.show', $event->id) }}">
                                            {{ $event->event_title }}
                                        </a>
                                    </td>
                                    <td>{{ $event->branch->branch_name }}</td>
                                    <td>{{ $event->created_user->name }}</td>
                                    <td>{{ $event->category->category_title }}</td>
                                    <td>
                                        <span class="text-primary font-weight-bold">{{ $event->event_location }} </span>
                                        <br> <span class="text-success font-weight-bold"> Date -
                                            ({{ date('d-m-Y', strToTime($event->event_start_date)) }} -
                                            {{ date('d-m-Y', strToTime($event->event_end_date)) }})
                                        </span>
                                        <br><span class="text-danger font-weight-bold"> Time - (
                                            {{ $event->event_time }}
                                            ) </span>
                                    </td>
                                    <td> Created - {{ date('d-m-Y h:s', strToTime($event->created_at)) }} <br>
                                        Last Updated - {{ date('d-m-Y h:s', strToTime($event->updated_at)) }}
                                    </td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-events.edit', $event->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit event">
                                                </div>
                                            </a>
                                            <a href="{{ route('admin-events.archived_event', $event->id) }}?status=0"
                                                onclick="return confirm('Are you sure you want to archive this Event?');"
                                                class="animated-icon mr-2 ">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/trash-bin/trash-bin.json') }}"
                                                    data-anim-loop="false" title="archive Event"></div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewEvent">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-events.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Event</h5>
                        <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Branch</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="event_branch_id" required
                                            title="Branch is required">
                                            <option disabled selected>Select a Branch</option>
                                            @foreach ($branches as $key => $data)
                                                <option value='{{ $data->id }}'>{{ $data->branch_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="event_category_id" required
                                            title="Category is required">
                                            <option disabled selected>Select a Category</option>
                                            @foreach ($categories as $key => $category)
                                                <option value='{{ $category->id }}'>{{ $category->category_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Banner </label>
                                    <div class="col-9">
                                        <span class="text-danger">Banner Size have to be 370x260!</span>
                                        <input type="file" placeholder="Choose Event Banner " value=""
                                            name="event_banner" title="Event Banner is required" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Title </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Choose Title " value=""
                                            name="event_title" title="Title is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Body </label>
                                    <div class="col-9">
                                        <small class=" text-danger">You Need To Fill This Text Area</small>
                                        <textarea class="form-control tinymceBox" name="event_body" placeholder="Enter Event Body "></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Video </label>
                                    <div class="col-9">
                                        <span><small>You can add video link if there is a video</small></span>
                                        <input type="text" placeholder="Choose Event Video Link (Optional)"
                                            value="" name="event_video" class="form-control">
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
                                    <div class="col-9">
                                        <span class="text-danger">Images Size have to be 370x260!</span>
                                        <input type="file" placeholder="Choose Event Images " value=""
                                            name="event_image[]" title="Event Images is required" required multiple
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> From/To Date </label>
                                    <div class="col-4">
                                        <input type="date" placeholder="Choose Event Start Date" value=""
                                            name="event_start_date" class="form-control" required>
                                    </div>
                                    <div class="col-5">
                                        <input type="date" placeholder="Choose Event End Date" value=""
                                            name="event_end_date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Time </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="1PM - 5PM" value="" name="event_time"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Location </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Enter Event Location" value=""
                                            name="event_location" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Registration Free </label>
                                    <div class="col-9">
                                        <input type="text"
                                            placeholder="You can write free if there is no registration fee"
                                            value="" name="event_registration_fee" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Will Show at the Landing Page ?
                                    </label>
                                    <div class="col-9">
                                        <input type="checkbox" name="event_is_show_front" id="" value="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
