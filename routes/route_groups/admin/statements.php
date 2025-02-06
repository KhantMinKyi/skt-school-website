<?php

use App\Http\Controllers\StatementController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-statements', StatementController::class);
