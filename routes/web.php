<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/administration-panel/login', function () {
    return view('pages.login');
});

// Route::post('/administration-panel/login')
