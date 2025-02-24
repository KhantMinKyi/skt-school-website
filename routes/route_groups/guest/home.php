<?php

use App\Http\Controllers\GeneralRouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/skt-city-campus', function () {
//     return view('pages.city.home');
// })->name('city.home');

// Home
Route::get('/skt-riverside-campus', [GeneralRouteController::class, 'riverHome'])->name('river.home');
Route::get('/skt-city-campus', [GeneralRouteController::class, 'cityHome'])->name('city.home');

// About Us
Route::get('/about_us/principal_message/{param}', [GeneralRouteController::class, 'principalMessage'])->name('principal-message.home');
Route::get('/about_us/our_history/{param}', [GeneralRouteController::class, 'ourHistory'])->name('our-history.home');
Route::get('/about_us/our_statement/{param}', [GeneralRouteController::class, 'ourStatement'])->name('our-statement.home');
Route::get('/about_us/our_teachers/{param}', [GeneralRouteController::class, 'ourTeacher'])->name('our-teachers.home');
Route::get('/about_us/sister_schools/{param}', [GeneralRouteController::class, 'sisterSchool'])->name('sister-schools.home');

// Student Life
Route::get('/student_life/alumni/{param}', [GeneralRouteController::class, 'showAlumni'])->name('alumni.home');
Route::get('/student_life/news/{param}', [GeneralRouteController::class, 'showNews'])->name('news.home');
Route::get('/student_life/news-detail/{param}', [GeneralRouteController::class, 'showNewsDetail'])->name('news-detail.home');
Route::get('/student_life/gallery/{param}', [GeneralRouteController::class, 'showGallery'])->name('gallery.home');
Route::get('/student_life/calendar/{param}', [GeneralRouteController::class, 'showCalendar'])->name('calendar.home');

//Education
Route::get('/education/pre_school/{param}', [GeneralRouteController::class, 'showPreSchool'])->name('pre-school.home');
