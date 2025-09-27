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
        <div class="card-header font-weight-bold h5">Jobs</div>
        <div class="text-right m-4 ">
            <a href="#" class="btn btn-success btn-md" data-bs-toggle="modal" data-bs-target="#modalNewJob">
                <div class="d-flex  align-items-center">
                    <span class="animated-icon mr-2 ">
                        <div style="width:14px;height:14px; cursor: pointer;"
                            data-animation-path="{{ asset('admin/vendor/animated-icons/add/add.json') }}"
                            data-anim-loop="false" title="Add Principal Messsage"></div>
                    </span>
                    Add New Job
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
                                <th>Title</th>
                                <th>Posted Date</th>
                                <th>Experience Level</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->branch->branch_name }}</td>
                                    <td>{{ $job->career_job_title }}</td>
                                    <td>{{ date('d-m-Y', strToTime($job->created_at)) }}</td>
                                    <td>{{ $job->career_job_education_level }}</td>
                                    <td>{{ $job->career_job_is_active == 1 ? 'Active' : 'Closed' }}</td>
                                    <td class="">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a class="animated-icon mr-2"
                                                href="{{ route('admin-career-jobs.edit', $job->id) }}">
                                                <div style="width:14px;height:14px; cursor: pointer;"
                                                    data-animation-path="{{ asset('admin/vendor/animated-icons/edit/edit.json') }}"
                                                    data-anim-loop="false" title="edit Job">
                                                </div>
                                            </a>
                                            <form action="{{ route('admin-career-jobs.destroy', $job->id) }}"
                                                method="POST" id="deleteJobForm">
                                                @csrf
                                                @method('DELETE') <!-- Ensure DELETE method is used -->
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
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

    <div class="modal fade" tabindex="-1" id="modalNewJob">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin-career-jobs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Add New job</h5>
                        <button type="button" class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                            data-bs-dismiss="modal" aria-label="Close">
                            <span class="svg-icon svg-icon-2x"><i class="fa-solid fa-xmark"></i></span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row gap-5">
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Branch</label>

                                    <select class="form-control select2" name="career_job_branch_id" required
                                        title="Branch is required">
                                        <option disabled selected>Select a Branch</option>
                                        @foreach ($branches as $key => $data)
                                            <option value='{{ $data->id }}'>{{ $data->branch_name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Job Title</label>

                                    <input type="text" class="form-control" placeholder="Enter Job Title"
                                        name="career_job_title" required>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Job Function</label>

                                    <input type="text" class="form-control" placeholder="Enter Job Function"
                                        name="career_job_function" required>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Job Sub Function</label>

                                    <input type="text" class="form-control" placeholder="Enter Job Sub Function"
                                        name="career_job_sub_function" required>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Gender</label>

                                    <select class="form-control select2" name="career_job_gender" required
                                        title="Gender is required">
                                        <option disabled selected>Select a Gender</option>
                                        <option value='Male'>Male</option>
                                        <option value='Female'>Female</option>
                                        <option value='Both'>Both</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Experience</label>

                                    <select class="form-control select2" name="career_job_experience_level" required
                                        title="Experience is required">
                                        <option disabled selected>Select a Gender</option>
                                        <option value='Entry Level'>Entry Level</option>
                                        <option value='Experienced Non-Manager'>Experienced Non-Manager</option>
                                        <option value='Manager'>Manager</option>
                                        <option value='Director and Above'>Director and Above</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Education</label>

                                    <select class="form-control select2" name="career_job_education_level" required
                                        title="Education is required">
                                        <option disabled selected>Select a Gender</option>
                                        <option value='High School Diploma'>High School Diploma</option>
                                        <option value='Associate Degree'>Associate Degree</option>
                                        <option value='Bachelor`s Degree'>Bachelor`s Degree</option>
                                        <option value='Master`s Degree'>Master`s Degree</option>
                                        <option value='Doctorate (Ph.D.)'>Doctorate (Ph.D.)</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Number of Posts</label>

                                    <input type="number" class="form-control" placeholder="Enter Number of Posts"
                                        name="career_job_number_of_post" required>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Job Type</label>

                                    <select class="form-control select2" name="career_job_type" required
                                        title="Type is required">
                                        <option disabled selected>Select a Type</option>
                                        <option value='Full Time'>Full Time</option>
                                        <option value='Part Time'>Part Time</option>
                                        <option value='Temp/Contract'>Temp/Contract</option>
                                        <option value='Voluntary'>Voluntary</option>
                                        <option value='Internship'>Internship</option>
                                        <option value='Project Specific'>Project Specific</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Computer Skill</label>

                                    <select class="form-control select2" name="career_job_computer_skill" required
                                        title=" Computer Skill is required">
                                        <option disabled selected>Select a Type</option>
                                        <option value='Beginner'>Beginner</option>
                                        <option value='Intermediate'>Intermediate</option>
                                        <option value='Advanced'>Advanced</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Industry</label>

                                    <select class="form-control select2" name="career_job_industry" required
                                        title=" Industry is required">
                                        <option disabled selected>Select a Type</option>
                                        <option value='IT/Computer'>IT/Computer</option>
                                        <option value='Banking/Insurance/Microfinance'>Banking/Insurance/Microfinance
                                        </option>
                                        <option value='Education/Training'>Education/Training</option>
                                        <option value='Telecommunications'>Telecommunications</option>
                                        <option value='Construction/Building/Architecture'>
                                            Construction/Building/Architecture</option>
                                        <option value='Medical/Hospital'>Medical/Hospital</option>
                                        <option value='Advertising/PR/Marketing'>Advertising/PR/Marketing</option>
                                        <option value='Accounting'>Accounting</option>
                                        <option value='Recruitment'>Recruitment</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Maximun Salary</label>

                                    <input type="number" class="form-control" placeholder="Enter Maximun Salary"
                                        name="career_job_maximun_salary" required>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Employee Type</label>

                                    <select class="form-control select2" name="career_job_employee_type" required
                                        title=" Employee Type is required">
                                        <option disabled selected>Select a Type</option>
                                        <option value='Local'>Local</option>
                                        <option value='Foreigner'>Foreigner</option>
                                        <option value='Both'>Both</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="text-danger"> Email</label>

                                    <input type="email" class="form-control" placeholder="Enter Email"
                                        name="career_job_email" required>

                                </div>
                            </div>
                            <div class="col-4 p-4">
                                <div class="row mb-3 d-flex justify-content-around ">
                                    <label for="inputEmail3" class="text-danger"> Will Hide Salary ? </label>
                                    <div>
                                        <input type="checkbox" placeholder="Enter Email" value="1"
                                            name="career_job_is_hide_salary">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-column">
                                <label for="inputEmail3" class="text-danger">Job Description</label>
                                <textarea class="form-control tinymceBox" name="career_job_description"></textarea>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="d-flex flex-column">
                                <label for="inputEmail3" class="text-danger">Job Requirement</label>
                                <textarea class="form-control tinymceBox" name="career_job_requirement"></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 p-2">
                                <div class="d-flex flex-column">
                                    <label for="inputEmail3" class="text-danger">Job Benefits</label>
                                    <textarea class="form-control tinymceBox" name="career_job_benefits"></textarea>
                                </div>
                            </div>
                            <div class="col-4 p-2">
                                <div class="d-flex flex-column">
                                    <label for="inputEmail3" class="text-danger">Job Higlights</label>
                                    <textarea class="form-control tinymceBox" name="career_job_highlights"></textarea>
                                </div>
                            </div>
                            <div class="col-4 p-2">
                                <div class="d-flex flex-column">
                                    <label for="inputEmail3" class="text-danger">Job Career Growth</label>
                                    <textarea class="form-control tinymceBox" name="career_job_career_growth"></textarea>
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
