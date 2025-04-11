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
        <div class="card-header font-weight-bold h5">Teachers</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewTeacher">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Principal Messsage"></div>
                    </span>
                    Add New Teachers' Photos
                </div>
            </a>

        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" id="searchName" class="form-control" placeholder="Search by Name">
                </div>
                <div class="col-md-4">
                    <input type="text" id="searchClass" class="form-control" placeholder="Search by Class">
                </div>
                <div class="col-md-4">
                    <select id="searchBranch" class="form-control">
                        <option value="">Select Branch</option>
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Branch Name</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="teacherTable">
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>
                                        <img src="{{ asset($teacher->teacher_photo) }}" alt="" width="80px">
                                    </td>
                                    <td>{{ $teacher->branch->branch_name }}</td>
                                    <td>{{ $teacher->teacher_name }}</td>
                                    <td>{{ ucfirst($teacher->teacher_class) }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-teachers.edit', $teacher->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit Teacher">
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between mt-3">
                        <button id="prevPage" class="btn btn-secondary">Previous</button>
                        <span id="paginationInfo"></span>
                        <button id="nextPage" class="btn btn-secondary">Next</button>
                    </div>
                    {{-- {{ $teachers->links() }} --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modalNewTeacher">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-teachers.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Teachers' Photos</h5>
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
                                        <select class="form-control select2" name="teacher_branch_id" required
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
                                        <small class="text-danger">You Can Multi Select Photo</small>
                                        <input type="file" placeholder="Choose Teacher Photo " multiple value=""
                                            name="teacher_photos[]" title="Image is required" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-3 col-form-label"> Class</label>
                                    <div class="col-9">
                                        <select class="form-control select2" name="teacher_class" required
                                            title="Class is required">
                                            <option disabled selected>Select a Class</option>
                                            <option value='assistant'>Assistant </option>
                                            <option value='kg'>KG </option>
                                            <option value='primary'>Primary</option>
                                            <option value='lower-secondary'>Lower Secondary</option>
                                            <option value='secondary'>Secondary</option>
                                            <option value='principal'>Principal</option>
                                            <option value='vice-principal'>Vice Principal</option>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            let teachers = @json($teachers); // Load all teachers from the backend
            let filteredTeachers = teachers; // Copy for filtering
            let currentPage = 1;
            const rowsPerPage = 10; // Set items per page

            function renderTable(data) {
                $("#teacherTable").empty();
                let start = (currentPage - 1) * rowsPerPage;
                let paginatedData = data.slice(start, start + rowsPerPage);

                if (paginatedData.length === 0) {
                    $("#teacherTable").html('<tr><td colspan="6" class="text-center">No data found</td></tr>');
                } else {
                    paginatedData.forEach((teacher, index) => {
                        $("#teacherTable").append(`
                    <tr>
                        <td>${teacher.id}</td>
                        <td><img src="${teacher.teacher_photo}" alt="" width="80px"></td>
                        <td>${teacher.branch.branch_name}</td>
                        <td>${teacher.teacher_name}</td>
                        <td>${teacher.teacher_class.charAt(0).toUpperCase() + teacher.teacher_class.slice(1)}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center">
                                <a class="btn btn-sm btn-info mr-2" href="/administration-panel/admin/admin-teachers/${teacher.id}/edit">
                                    Edit
                                </a>
                                <a class="btn btn-sm btn-danger mr-2 delete-btn" href="/administration-panel/admin/admin-teachers/delete-teacher/${teacher.id}" data-id="${teacher.id}">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                `);
                    });
                }
                updatePagination(data.length);
            }

            function updatePagination(totalItems) {
                const totalPages = Math.ceil(totalItems / rowsPerPage);
                const startItem = (currentPage - 1) * rowsPerPage + 1;
                const endItem = currentPage * rowsPerPage > totalItems ? totalItems : currentPage * rowsPerPage;

                // Update pagination text to show current page and total items
                $("#paginationInfo").text(
                    `Page ${currentPage} of ${totalPages} | Showing ${startItem}-${endItem} of ${totalItems} teachers`
                );

                // Disable Prev/Next buttons as needed
                $("#prevPage").prop("disabled", currentPage === 1);
                $("#nextPage").prop("disabled", currentPage * rowsPerPage >= totalItems);
            }

            function filterData() {
                let name = $("#searchName").val().toLowerCase();
                let className = $("#searchClass").val().toLowerCase();
                let branchId = $("#searchBranch").val();

                filteredTeachers = teachers.filter(teacher => {
                    return (
                        (name === "" || teacher.teacher_name.toLowerCase().includes(name)) &&
                        (branchId === "" || teacher.teacher_branch_id == branchId) &&
                        (className === "" || teacher.teacher_class.toLowerCase().includes(className))

                    );
                });

                currentPage = 1; // Reset to first page
                renderTable(filteredTeachers);
            }

            // Event listeners for search filters
            $("#searchName, #searchBranch ,#searchClass").on("input change", function() {
                filterData();
            });

            // Handle the 'Previous' button click
            $("#prevPage").click(function() {
                if (currentPage > 1) {
                    currentPage--;
                    renderTable(filteredTeachers);
                }
            });

            // Handle the 'Next' button click
            $("#nextPage").click(function() {
                if (currentPage * rowsPerPage < filteredTeachers.length) {
                    currentPage++;
                    renderTable(filteredTeachers);
                }
            });
            // Initial Render
            renderTable(teachers);
        });
    </script>
    <script>
        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault(); // Prevent the default action (the link navigation)

            // Show a confirmation dialog
            var isConfirmed = confirm('Are you sure you want to delete this teacher?');

            // If confirmed, redirect to the delete route
            if (isConfirmed) {
                var deleteUrl = $(this).attr('href'); // Get the URL from the `href` attribute
                window.location.href = deleteUrl; // Redirect to the delete URL
            }
        });
    </script>
@endsection
