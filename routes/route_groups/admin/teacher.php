<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-teachers', TeacherController::class);
Route::get('admin-teachers/delete-teacher/{id}', [TeacherController::class, 'deleteTeacher'])->name('admin-teachers.delete_teacher');
