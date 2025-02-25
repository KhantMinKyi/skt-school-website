<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-posts', PostController::class);
Route::get('admin-posts/archived-post/show-archived-post', [PostController::class, 'showArchivedPost'])->name('admin-posts.show_archived_post');
Route::get('admin-posts/archived-post/{id}', [PostController::class, 'archivedPost'])->name('admin-posts.archived_post');

Route::resource('admin-post-comments', PostCommentController::class);
Route::put('admin-post-comments/change_comment_status/update', [PostCommentController::class, 'changeCommentStatus'])->name('admin-post-comments.change_comment_status');
