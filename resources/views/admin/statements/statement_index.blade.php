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
        <div class="card-header font-weight-bold h5">Statement</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewStatement">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Principal Messsage"></div>
                    </span>
                    Add New Statement
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
                                <th>Branch Name</th>
                                <th>Image</th>
                                <th>Vision</th>
                                <th>Mission</th>
                                <th>Philosophy</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statements as $statement)
                                <tr>
                                    <td>{{ $statement->id }}</td>
                                    <td>{{ $statement->branch->branch_name }}</td>
                                    <td>
                                        <img src="{{ asset($statement->statement_photo) }}" alt="" width="80px">
                                    </td>
                                    <td>{!! $statement->statement_vision !!}</td>
                                    <td>{!! $statement->statement_mission !!}</td>
                                    <td>{!! $statement->statement_philosophy !!}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-statements.edit', $statement->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit Statement">
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $statements->links() }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewStatement">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-statements.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Statement</h5>
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
                                        <select class="form-control select2" name="statement_branch_id" required
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
                                        <small class="text-danger">Photo Size Must be 1024x1084</small>
                                        <input type="file" placeholder="Choose Logo " value=""
                                            name="statement_photo" title="Image is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Our Vision </label>
                                    <div class="col-9">
                                        {{-- <textarea class="form-control" placeholder="Enter a Our Mission " name="statement_vision" id="" cols="30"
                                            rows="10" required></textarea> --}}
                                        <textarea class="form-control tinymceBox" name="statement_mission"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Our Mission</label>
                                    <div class="col-9">
                                        {{-- <textarea class="form-control" placeholder="Enter a Our Mission " name="statement_mission" id="" cols="30"
                                            rows="10" required></textarea> --}}
                                        <textarea class="form-control tinymceBox" name="statement_mission"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Our Philosophy</label>
                                    <div class="col-9">
                                        {{-- <textarea class="form-control" placeholder="Enter a Our Mission " name="statement_philosophy" id=""
                                            cols="30" rows="10" required></textarea> --}}
                                        <textarea class="form-control tinymceBox" name="statement_philosophy"></textarea>
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
        function confirmDelete(event) {
            // Prevent the form submission
            event.preventDefault();

            // Ask for confirmation
            if (confirm("Are you sure you want to delete this job?")) {
                // If user confirms, submit the form
                document.getElementById('deleteJobForm').submit();
            }
        }
    </script>
@endsection
