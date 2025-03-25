<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\CareerJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->is_admin == 1) {
            $branches = Branch::all();
            $jobs = CareerJob::all();

            return view('admin.career_jobs.career_job_index', compact('jobs', 'branches'));
        } else {
            $jobs = CareerJob::where('career_job_branch_id', $user->branch_id)->get();
            dd($jobs);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'career_job_branch_id' => 'required',
            'career_job_title' => 'required',
            'career_job_function' => 'required',
            'career_job_sub_function' => 'required',
            'career_job_gender' => 'required',
            'career_job_experience_level' => 'required',
            'career_job_education_level' => 'required',
            'career_job_number_of_post' => 'required',
            'career_job_type' => 'required',
            'career_job_computer_skill' => 'required',
            'career_job_industry' => 'required',
            'career_job_maximun_salary' => 'required',
            'career_job_employee_type' => 'required',
            'career_job_email' => 'required',
            'career_job_description' => 'required',
            'career_job_requirement' => 'required',
            'career_job_benefits' => 'required',
            'career_job_highlights' => 'required',
            'career_job_career_growth' => 'required',
        ]);
        $data['career_job_is_hide_salary'] = $request->has('career_job_is_hide_salary') ? 1 : 0;
        $data['career_job_created_user_id'] = Auth::user()->id;
        $data['career_job_updated_user_id'] = Auth::user()->id;
        CareerJob::create($data);
        return to_route('admin-career-jobs.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = CareerJob::find($id);
        $branches = Branch::all();
        $user = Auth::user();
        if ($user->is_admin == 1) {
            return view('partial_view.admin.career_jobs.career_job_edit', compact('job', 'branches'));
        } else {
            dd($job);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'career_job_branch_id' => 'required',
            'career_job_title' => 'required',
            'career_job_function' => 'required',
            'career_job_sub_function' => 'required',
            'career_job_gender' => 'required',
            'career_job_experience_level' => 'required',
            'career_job_education_level' => 'required',
            'career_job_number_of_post' => 'required',
            'career_job_type' => 'required',
            'career_job_computer_skill' => 'required',
            'career_job_industry' => 'required',
            'career_job_maximun_salary' => 'required',
            'career_job_employee_type' => 'required',
            'career_job_email' => 'required',
            'career_job_description' => 'required',
            'career_job_requirement' => 'required',
            'career_job_benefits' => 'required',
            'career_job_highlights' => 'required',
            'career_job_career_growth' => 'required',
        ]);
        $data['career_job_is_hide_salary'] = $request->has('career_job_is_hide_salary') ? 1 : 0;
        $data['career_job_is_active'] = $request->has('career_job_is_active') ? 1 : 0;
        $data['career_job_updated_user_id'] = Auth::user()->id;
        $job = CareerJob::find($id);
        $job->update($data);
        return to_route('admin-career-jobs.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = CareerJob::find($id);
        $data->delete();
        return to_route('admin-career-jobs.index')->with('success', 'Deleted Successfully');
    }
}
