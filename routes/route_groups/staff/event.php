<?php

use App\Http\Controllers\EventCommentController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('staff-events', EventController::class);
Route::get('staff-events/archived-event/show-archived-event', [EventController::class, 'showArchivedEvent'])->name('staff-events.show_archived_event');
Route::get('staff-events/archived-event/{id}', [EventController::class, 'archivedEvent'])->name('staff-events.archived_event');

Route::resource('staff-event-comments', EventCommentController::class);
Route::put('staff-event-comments/change_comment_status/update', [EventCommentController::class, 'changeCommentStatus'])->name('staff-event-comments.change_comment_status');
