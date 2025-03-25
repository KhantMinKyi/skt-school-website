<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerJob extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'career_job_created_user_id',
        'career_job_updated_user_id',
        'career_job_branch_id',
        'career_job_title',
        'career_job_function',
        'career_job_sub_function',
        'career_job_gender',
        'career_job_experience_level',
        'career_job_education_level',
        'career_job_number_of_post',
        'career_job_type',
        'career_job_computer_skill',
        'career_job_maximun_salary',
        'career_job_is_hide_salary',
        'career_job_employee_type',
        'career_job_email',
        'career_job_description',
        'career_job_requirement',
        'career_job_benefits',
        'career_job_highlights',
        'career_job_career_growth',
        'career_job_is_active',
    ];
    public function created_user()
    {
        return $this->belongsTo(User::class, 'career_job_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'career_job_updated_user_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'career_job_branch_id');
    }
}
