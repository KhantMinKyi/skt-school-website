<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsStaff;
use Illuminate\Support\Facades\Route;

// Home
include __DIR__ . '/route_groups/guest/home.php';

// admin
Route::group(['middleware' => ['auth', IsAdmin::class], 'prefix' => '/administration-panel/admin'], function () {
    Route::get('dashborad', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    include __DIR__ . '/route_groups/admin/branch.php';
    include __DIR__ . '/route_groups/admin/user.php';
    include __DIR__ . '/route_groups/admin/category.php';
    include __DIR__ . '/route_groups/admin/event.php';
    include __DIR__ . '/route_groups/admin/post.php';
    include __DIR__ . '/route_groups/admin/principal_message.php';
    include __DIR__ . '/route_groups/admin/history.php';
    include __DIR__ . '/route_groups/admin/statements.php';
    include __DIR__ . '/route_groups/admin/teacher.php';
    include __DIR__ . '/route_groups/admin/gallery.php';
    include __DIR__ . '/route_groups/admin/calendar.php';
});
// staff
Route::group(['middleware' => ['auth', IsStaff::class], 'prefix' => '/administration-panel/staff'], function () {
    Route::get('dashborad', function () {
        return view('staff.dashboard');
    })->name('staff.dashboard');
});


// Authentication
include __DIR__ . '/route_groups/guest/auth.php';



// Error handling
Route::any('{catchall}', function () {
    return view('pages.not_found');
})->where('catchall', '.*');
