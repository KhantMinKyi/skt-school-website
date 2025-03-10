<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-contacts', ContactController::class);
// Route::put('admin-event-comments/change_comment_status/update', [EventCommentController::class, 'changeCommentStatus'])->name('admin-event-comments.change_comment_status');
