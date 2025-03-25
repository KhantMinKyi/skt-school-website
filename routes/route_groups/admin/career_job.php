<?php

use App\Http\Controllers\CareerJobController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-career-jobs', CareerJobController::class);
