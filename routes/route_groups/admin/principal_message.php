<?php

use App\Http\Controllers\PrincipalMessageController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-principal-messages', PrincipalMessageController::class);
