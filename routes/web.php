<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/administration-panel/login', function () {
    return view('pages.login');
})->name('show.login');

Route::post('/administration-panel/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/administration-panel/admin/dashborad', function () {
        return view('admin.dashboard');
    });
});
