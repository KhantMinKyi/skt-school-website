<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('staff-posts', PostController::class);
Route::get('staff-posts/archived-post/show-archived-post', [PostController::class, 'showArchivedPost'])->name('staff-posts.show_archived_post');
Route::get('staff-posts/archived-post/{id}', [PostController::class, 'archivedPost'])->name('staff-posts.archived_post');

Route::resource('staff-post-comments', PostCommentController::class);
Route::put('staff-post-comments/change_comment_status/update', [PostCommentController::class, 'changeCommentStatus'])->name('staff-post-comments.change_comment_status');
