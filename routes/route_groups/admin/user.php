<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-users', UserController::class);
Route::get('admin-users/archived-user/show-archived-user', [UserController::class, 'showArchivedUser'])->name('admin-users.show_archived_user');
Route::get('admin-users/archived-user/{id}', [UserController::class, 'archivedUser'])->name('admin-users.archived_user');
Route::get('admin-users/show_reset_password/{id}', [UserController::class, 'showResetPassword'])->name('admin-users.show_reset_password');
Route::post('admin-users/user_reset_password', [UserController::class, 'resetPassword'])->name('admin-users.user_reset_password');
