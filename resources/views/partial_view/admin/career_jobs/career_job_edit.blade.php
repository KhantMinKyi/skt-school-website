@extends('layouts.admin_layout')

@section('content')
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
        <form action="{{ route('admin-career-jobs.update', $job->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header font-weight-bold h5">Job Edit</div>
            <div class="card-body">
                <div class="row gap-5">
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Branch</label>

                            <select class="form-control select2" name="career_job_branch_id" required
                                title="Branch is required">
                                <option disabled selected>Select a Branch</option>
                                @foreach ($branches as $key => $data)
                                    <option value='{{ $data->id }}' @if ($data->id == $job->career_job_branch_id) selected @endif>
                                        {{ $data->branch_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Job Title</label>

                            <input type="text" class="form-control" placeholder="Enter Job Title" name="career_job_title"
                                value="{{ $job->career_job_title }}" required>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Job Function</label>

                            <input type="text" class="form-control" placeholder="Enter Job Function"
                                value="{{ $job->career_job_function }}" name="career_job_function" required>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Job Sub Function</label>

                            <input type="text" class="form-control" placeholder="Enter Job Sub Function"
                                value="{{ $job->career_job_sub_function }}" name="career_job_sub_function" required>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Gender</label>

                            <select class="form-control select2" name="career_job_gender" required
                                title="Gender is required">
                                <option disabled selected>Select a Gender</option>
                                <option value='Male' @if ($job->career_job_gender == 'Male') selected @endif>Male</option>
                                <option value='Female' @if ($job->career_job_gender == 'Female') selected @endif>Female</option>
                                <option value='Both' @if ($job->career_job_gender == 'Both') selected @endif>Both</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Experience</label>

                            <select class="form-control select2" name="career_job_experience_level" required
                                title="Experience is required">
                                <option disabled selected>Select a Gender</option>
                                <option value='Entry Level' @if ($job->career_job_experience_level == 'Entry Level') selected @endif>Entry Level
                                </option>
                                <option value='Experienced Non-Manager' @if ($job->career_job_experience_level == 'Experienced Non-Manager') selected @endif>
                                    Experienced Non-Manager</option>
                                <option value='Manager' @if ($job->career_job_experience_level == 'Manager') selected @endif>Manager</option>
                                <option value='Director and Above' @if ($job->career_job_experience_level == 'Director and Above') selected @endif>
                                    Director
                                    and Above</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Education</label>

                            <select class="form-control select2" name="career_job_education_level" required
                                title="Education is required">
                                <option disabled selected>Select a Gender</option>
                                <option value='High School Diploma' @if ($job->career_job_education_level == 'High School Diploma') selected @endif>High
                                    School Diploma</option>
                                <option value='Associate Degree' @if ($job->career_job_education_level == 'Associate Degree') selected @endif>Associate
                                    Degree</option>
                                <option value='Bachelor`s Degree' @if ($job->career_job_education_level == 'Bachelor`s Degree') selected @endif>
                                    Bachelor`s
                                    Degree</option>
                                <option value='Master`s Degree' @if ($job->career_job_education_level == 'Master`s Degree') selected @endif>Master`s
                                    Degree</option>
                                <option value='Doctorate (Ph.D.)' @if ($job->career_job_education_level == 'Doctorate (Ph.D.)') selected @endif>
                                    Doctorate
                                    (Ph.D.)</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Number of Posts</label>

                            <input type="number" class="form-control" placeholder="Enter Number of Posts"
                                value="{{ $job->career_job_number_of_post }}" name="career_job_number_of_post" required>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Job Type</label>

                            <select class="form-control select2" name="career_job_type" required title="Type is required">
                                <option disabled selected>Select a Type</option>
                                <option value='Full Time' @if ($job->career_job_type == 'Full Time') selected @endif>Full Time
                                </option>
                                <option value='Part Time' @if ($job->career_job_type == 'Part Time') selected @endif>Part Time
                                </option>
                                <option value='Temp/Contract' @if ($job->career_job_type == 'Temp/Contract') selected @endif>
                                    Temp/Contract
                                </option>
                                <option value='Voluntary' @if ($job->career_job_type == 'Voluntary') selected @endif>Voluntary
                                </option>
                                <option value='Internship' @if ($job->career_job_type == 'Internship') selected @endif>Internship
                                </option>
                                <option value='Project Specific' @if ($job->career_job_type == 'Project Specific') selected @endif>Project
                                    Specific</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Computer Skill</label>

                            <select class="form-control select2" name="career_job_computer_skill" required
                                title=" Computer Skill is required">
                                <option disabled selected>Select a Type</option>
                                <option value='Beginner' @if ($job->career_job_computer_skill == 'Beginner') selected @endif>Beginner
                                </option>
                                <option value='Intermediate' @if ($job->career_job_computer_skill == 'Intermediate') selected @endif>
                                    Intermediate
                                </option>
                                <option value='Advanced' @if ($job->career_job_computer_skill == 'Advanced') selected @endif>Advanced
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Industry</label>

                            <select class="form-control select2" name="career_job_industry" required
                                title=" Industry is required">
                                <option disabled selected>Select a Type</option>
                                <option value='IT/Computer' @if ($job->career_job_industry == 'IT/Computer') selected @endif>IT/Computer
                                </option>
                                <option value='Banking/Insurance/Microfinance'
                                    @if ($job->career_job_industry == 'Banking/Insurance/Microfinance') selected @endif>Banking/Insurance/Microfinance
                                </option>
                                <option value='Education/Training' @if ($job->career_job_industry == 'Education/Training') selected @endif>
                                    Education/Training</option>
                                <option value='Telecommunications' @if ($job->career_job_industry == 'Telecommunications') selected @endif>
                                    Telecommunications</option>
                                <option value='Construction/Building/Architecture'
                                    @if ($job->career_job_industry == 'Construction/Building/Architecture') selected @endif>
                                    Construction/Building/Architecture</option>
                                <option value='Medical/Hospital' @if ($job->career_job_industry == 'Medical/Hospital') selected @endif>
                                    Medical/Hospital</option>
                                <option value='Advertising/PR/Marketing'
                                    @if ($job->career_job_industry == 'Advertising/PR/Marketing') selected @endif>
                                    Advertising/PR/Marketing</option>
                                <option value='Accounting' @if ($job->career_job_industry == 'Accounting') selected @endif>Accounting
                                </option>
                                <option value='Recruitment' @if ($job->career_job_industry == 'Recruitment') selected @endif>Recruitment
                                </option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Maximun Salary</label>

                            <input type="number" class="form-control" placeholder="Enter Maximun Salary"
                                value="{{ $job->career_job_maximun_salary }}" name="career_job_maximun_salary" required>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Employee Type</label>

                            <select class="form-control select2" name="career_job_employee_type" required
                                title=" Employee Type is required">
                                <option disabled selected>Select a Type</option>
                                <option value='Local' @if ($job->career_job_employee_type == 'Local') selected @endif>Local</option>
                                <option value='Foreigner' @if ($job->career_job_employee_type == 'Foreigner') selected @endif>Foreigner
                                </option>
                                <option value='Both' @if ($job->career_job_employee_type == 'Both') selected @endif>Both</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="text-danger"> Email</label>

                            <input type="email" class="form-control" placeholder="Enter Email" name="career_job_email"
                                value="{{ $job->career_job_email }}" required>

                        </div>
                    </div>
                    <div class="col-4 p-4">
                        <div class="row mb-3 d-flex justify-content-between  ">
                            <label for="inputEmail3" class="text-danger"> Will Hide Salary ? </label>
                            <div>
                                <input type="checkbox" placeholder="Enter Email" value="1"
                                    name="career_job_is_hide_salary" @if ($job->career_job_is_hide_salary === 1) checked @endif>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex justify-content-between ">
                            <label for="inputEmail3" class="text-danger"> Is Active ? </label>
                            <div>
                                <input type="checkbox" placeholder="Enter Email" value="1"
                                    name="career_job_is_active" @if ($job->career_job_is_active === 1) checked @endif>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <label for="inputEmail3" class="text-danger">Job Description</label>
                        <textarea class="form-control tinymceBox" name="career_job_description">{{ $job->career_job_description }}</textarea>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="d-flex flex-column">
                        <label for="inputEmail3" class="text-danger">Job Requirement</label>
                        <textarea class="form-control tinymceBox" name="career_job_requirement">{{ $job->career_job_requirement }}</textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-4 p-2">
                        <div class="d-flex flex-column">
                            <label for="inputEmail3" class="text-danger">Job Benefits</label>
                            <textarea class="form-control tinymceBox" name="career_job_benefits">{{ $job->career_job_benefits }}</textarea>
                        </div>
                    </div>
                    <div class="col-4 p-2">
                        <div class="d-flex flex-column">
                            <label for="inputEmail3" class="text-danger">Job Higlights</label>
                            <textarea class="form-control tinymceBox" name="career_job_highlights">{{ $job->career_job_highlights }}</textarea>
                        </div>
                    </div>
                    <div class="col-4 p-2">
                        <div class="d-flex flex-column">
                            <label for="inputEmail3" class="text-danger">Job Career Growth</label>
                            <textarea class="form-control tinymceBox" name="career_job_career_growth">{{ $job->career_job_career_growth }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <a href="{{ route('admin-career-jobs.index') }}" class="btn btn-light" data-bs-dismiss="modal">
                    Close
                </a>
                <button type="submit" class="btn btn-primary" id="btnSubmitNewAssessment">
                    Edit
                </button>
            </div>
        </form>
    </div>
@endsection
