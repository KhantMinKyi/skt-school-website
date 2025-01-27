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
        <div class="card-header font-weight-bold h5">Branches</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewBranch">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Branch"></div>
                    </span>
                    Add New Branch
                </div>
            </a>
            <a href="{{ route('admin-branches.show_archived_branch') }}" class="btn btn-secondary btn-md">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/open-box/open-box.json') }}"
                            data-anim-loop="false" title="Show Archived Branch"></div>
                    </span>
                    Archived Branches
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
                                <th>Logo</th>
                                <th>Branch Name</th>
                                <th>Short Name</th>
                                <th>Location</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($branches as $branch)
                                <tr>
                                    <td>{{ $branch->id }}</td>
                                    <td>
                                        <img src="{{ asset($branch->branch_logo) }}" alt="" width="80px">
                                    </td>
                                    <td>{{ $branch->branch_name }}</td>
                                    <td>{{ $branch->branch_short_name }}</td>
                                    <td>{{ $branch->branch_location }}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-branches.edit', $branch->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit branch">
                                                </div>
                                            </a>
                                            <a href="{{ route('admin-branches.archived_branch', $branch->id) }}?status=0"
                                                onclick="return confirm('Are you sure you want to archive this branch?');"
                                                class="animated-icon mr-2 ">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/trash-bin/trash-bin.json') }}"
                                                    data-anim-loop="false" title="archive branch"></div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $branches->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewBranch">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-branches.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New branch</h5>
                        <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Logo </label>
                                    <div class="col-9">
                                        <input type="file" placeholder="Choose Logo " value="" name="branch_logo"
                                            title="Logo is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Name </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Enter a full name " value=""
                                            name="branch_name" title="Name is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Short Name </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Enter a short name " value=""
                                            name="branch_short_name" title="Short Name is required" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Location </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Enter a Location " value=""
                                            name="branch_location" title="Location is required" required
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Description </label>
                                    <div class="col-9">
                                        <input type="text" placeholder="Enter a description " value=""
                                            name="branch_description" class="form-control">
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
@endsection
