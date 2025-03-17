<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventCommentController;
use App\Http\Controllers\GeneralRouteController;
use App\Http\Controllers\PostCommentController;
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
Route::get('/student_life/gallery/{param}', [GeneralRouteController::class, 'showGallery'])->name('gallery.home');
Route::get('/student_life/calendar/{param}', [GeneralRouteController::class, 'showCalendar'])->name('calendar.home');

//  News
Route::get('/student_life/news/{param}', [GeneralRouteController::class, 'showNews'])->name('news.home');
Route::get('/student_life/news-detail/{param}', [GeneralRouteController::class, 'showNewsDetail'])->name('news-detail.home');
Route::post('/student_life/news-comment', [PostCommentController::class, 'store'])->name('post-comment.store');

//Education
Route::get('/education/pre_school/{param}', [GeneralRouteController::class, 'showPreSchool'])->name('pre-school.home');

// Admission
Route::get('/admission/student_admission/{param}', [GeneralRouteController::class, 'showStudentAdmission'])->name('student-admission.home');
Route::get('/admission/admission_process/{param}', [GeneralRouteController::class, 'showAdmissionProcess'])->name('admission-process.home');
Route::get('/admission/withdrawal_policy/{param}', [GeneralRouteController::class, 'showWithdrawalPolicy'])->name('withdrawal-policy.home');

// Event
Route::get('/event/events/{param}', [GeneralRouteController::class, 'showEvents'])->name('event.home');
Route::get('/event/event-detail/{param}', [GeneralRouteController::class, 'showEventDetail'])->name('event-detail.home');
Route::post('/event/event-comment', [EventCommentController::class, 'store'])->name('event-comment.store');


//Contact Us
Route::get('/contact_us/contact_us/{param}', [GeneralRouteController::class, 'showContactUs'])->name('contact_us.home');
Route::post('/contact_us/contact_form_store', [ContactController::class, 'store'])->name('contact-form.store');
