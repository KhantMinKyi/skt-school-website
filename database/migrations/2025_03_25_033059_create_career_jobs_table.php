<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('career_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_job_created_user_id')->constrained('users');
            $table->foreignId('career_job_updated_user_id')->constrained('users');
            $table->foreignId('career_job_branch_id')->constrained('branches');
            $table->string('career_job_title');
            $table->string('career_job_function');
            $table->string('career_job_sub_function');
            $table->enum('career_job_gender', ['Male', 'Female', 'Both'])->default('Both');
            $table->enum('career_job_experience_level', ['Entry Level', 'Experienced Non-Manager', 'Manager', 'Director and Above']);
            $table->enum('career_job_education_level', ['High School Diploma', 'Associate Degree', 'Bachelor`s Degree', 'Master`s Degree', 'Doctorate (Ph.D.)']);
            $table->integer('career_job_number_of_post');
            $table->enum('career_job_type', ['Full Time', 'Part Time', 'Temp/Contract', 'Voluntary', 'Internship', 'Project Specific']);
            $table->enum('career_job_computer_skill', ['Beginner', 'Intermediate', 'Advanced']);
            $table->enum('career_job_industry', ['IT/Computer', 'Banking/Insurance/Microfinance', 'Education/Training', 'Telecommunications', 'Construction/Building/Architecture', 'Medical/Hospital', 'Advertising/PR/Marketing', 'Accounting', 'Recruitment']);
            $table->integer('career_job_maximun_salary');
            $table->boolean('career_job_is_hide_salary');
            $table->enum('career_job_employee_type', ['Local', 'Foreigner', 'Both'])->default('Both');
            $table->string('career_job_email');
            $table->longText('career_job_description');
            $table->longText('career_job_requirement');
            $table->text('career_job_benefits');
            $table->text('career_job_highlights');
            $table->text('career_job_career_growth');
            $table->boolean('career_job_is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_jobs');
    }
};
