<?php

use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-branches', BranchController::class);
