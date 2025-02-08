<?php

use App\Http\Controllers\GeneralRouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/skt-city-campus', function () {
//     return view('pages.city.home');
// })->name('city.home');
Route::get('/skt-riverside-campus', [GeneralRouteController::class, 'riverHome'])->name('river.home');
Route::get('/skt-city-campus', [GeneralRouteController::class, 'cityHome'])->name('city.home');
Route::get('/principal_message/{param}', [GeneralRouteController::class, 'principalMessage'])->name('principal-message.home');
Route::get('/our_history/{param}', [GeneralRouteController::class, 'ourHistory'])->name('our-history.home');
