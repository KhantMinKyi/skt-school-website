<?php

use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-calendars', CalendarController::class);
