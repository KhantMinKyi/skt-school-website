<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-categories', CategoryController::class);
