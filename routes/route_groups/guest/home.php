<?php

use App\Http\Controllers\GeneralRouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/skt-city-campus', function () {
    return view('pages.city.home');
})->name('city.home');
Route::get('/skt-riverside-campus', [GeneralRouteController::class, 'riverHome'])->name('river.home');
