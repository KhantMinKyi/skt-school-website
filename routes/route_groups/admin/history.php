<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-histories', HistoryController::class);
