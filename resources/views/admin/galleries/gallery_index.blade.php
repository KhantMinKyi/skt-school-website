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


    <div class="card">
        <div class="card-header font-weight-bold h5">Gallery</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewGallery">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Gallery"></div>
                    </span>
                    Add New Gallery
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
                                <th>Image</th>
                                <th>Branch Name</th>
                                <th> Title</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>
                                        <img src="{{ asset($gallery->gallery_photo) }}" alt="" width="80px">
                                    </td>
                                    <td>{{ $gallery->branch->branch_name }}</td>
                                    <td>{{ $gallery->gallery_title }}</td>
                                    <td>{{ ucfirst($gallery->gallery_category) }}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-galleries.edit', $gallery->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit gallery message">
                                                </div>
                                            </a>
                                            <a class="animated-icon mr-2 delete-btn"
                                                href="{{ route('admin-galleries.delete_gallery', $gallery->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/trash/trash.json') }}"
                                                    data-anim-loop="false" title="Delete gallery message">
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $galleries->links() }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewGallery">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-galleries.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Gallery</h5>
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
                                        <select class="form-control select2" name="gallery_branch_id" required
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
                                    <label for="inputEmail3" class="col-3 col-form-label"> Photo </label>
                                    <div class="col-9">
                                        <input type="file" placeholder="Choose Logo " multiple value=""
                                            name="gallery_photos[]" title="Image is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Gallery Title </label>
                                    <div class="col-9">
                                        <input type="text" class="form-control" placeholder="Enter Gallery Title"
                                            required name="gallery_title">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Class</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="gallery_category" required
                                            title="Category is required">
                                            <option disabled selected>Select a Category</option>
                                            <option value='building'>Building </option>
                                            <option value='class'>Class </option>
                                            <option value='lab'>Lab</option>
                                            <option value='playground'>Playground</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault(); // Prevent the default action (the link navigation)

            // Show a confirmation dialog
            var isConfirmed = confirm('Are you sure you want to delete this Gallery?');

            // If confirmed, redirect to the delete route
            if (isConfirmed) {
                var deleteUrl = $(this).attr('href'); // Get the URL from the `href` attribute
                window.location.href = deleteUrl; // Redirect to the delete URL
            }
        });
    </script>
@endsection
