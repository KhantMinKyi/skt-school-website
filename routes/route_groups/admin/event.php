<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-events', EventController::class);
Route::get('admin-events/archived-event/show-archived-event', [EventController::class, 'showArchivedEvent'])->name('admin-events.show_archived_event');
Route::get('admin-events/archived-event/{id}', [EventController::class, 'archivedEvent'])->name('admin-events.archived_event');
