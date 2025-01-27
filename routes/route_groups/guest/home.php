<?php

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
