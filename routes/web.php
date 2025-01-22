<?php

use App\Http\Controllers\Auth\AuthController;
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
Route::group(['middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/administration-panel/admin/dashborad', function () {
        return view('admin.dashboard');
    });
});

// staff
Route::group(['middleware' => ['auth', IsStaff::class]], function () {
    Route::get('/administration-panel/staff/dashborad', function () {
        return view('staff.dashboard');
    });
});

// Authentication
Route::get('/administration-panel/login', function () {
    return view('pages.login');
})->name('show.login');
Route::post('/administration-panel/login', [AuthController::class, 'login'])->name('login');
Route::post('/administration-panel/logout', [AuthController::class, 'logout'])->name('logout');


Route::any('{catchall}', function () {
    return view('pages.not_found');
})->where('catchall', '.*');
