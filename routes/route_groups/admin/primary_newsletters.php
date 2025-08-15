<?php


use App\Http\Controllers\PrimaryNewsletterController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-primary-newsletters', PrimaryNewsletterController::class);
