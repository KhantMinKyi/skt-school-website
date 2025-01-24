<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsStaff;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/skt-city-campus', function () {
    return view('pages.city.home');
})->name('city.home');
Route::get('/skt-riverside-campus', function () {
    return view('pages.riverside.home');
})->name('river.home');

// admin
Route::group(['middleware' => ['auth', IsAdmin::class], 'prefix' => '/administration-panel/admin'], function () {
    Route::get('dashborad', function () {
        return view('admin.dashboard');
    });
    Route::resource('admin-users', UserController::class);
    Route::resource('admin-branches', BranchController::class);
    Route::get('admin-users/archived-user/show-archived-user', [UserController::class, 'showArchivedUser'])->name('admin-users.show_archived_user');
    Route::get('admin-users/archived-user/{id}', [UserController::class, 'archivedUser'])->name('admin-users.archived_user');
});

// staff
Route::group(['middleware' => ['auth', IsStaff::class], 'prefix' => '/administration-panel/staff'], function () {
    Route::get('dashborad', function () {
        return view('staff.dashboard');
    });
});

// Authentication
Route::get('/administration-panel/login', function () {
    return view('pages.login');
})->name('show.login');
Route::post('/administration-panel/login', [AuthController::class, 'login'])->name('login');
Route::post('/administration-panel/logout', [AuthController::class, 'logout'])->name('logout');


// Error handling
Route::any('{catchall}', function () {
    return view('pages.not_found');
})->where('catchall', '.*');
