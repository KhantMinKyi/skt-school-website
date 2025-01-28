<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-events', EventController::class);
