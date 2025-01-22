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
});
Route::get('/skt-riverside-campus', function () {
    return view('pages.riverside.home');
});

Route::group(['middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/administration-panel/admin/dashborad', function () {
        return view('admin.dashboard');
    });
});

Route::group(['middleware' => ['auth', IsStaff::class]], function () {
    Route::get('/administration-panel/staff/dashborad', function () {
        return view('staff.dashboard');
    });
});

Route::get('/administration-panel/login', function () {
    return view('pages.login');
})->name('show.login');
Route::post('/administration-panel/login', [AuthController::class, 'login'])->name('login');
Route::post('/administration-panel/logout', [AuthController::class, 'logout'])->name('logout');
