<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::resource('staff-contacts', ContactController::class);
