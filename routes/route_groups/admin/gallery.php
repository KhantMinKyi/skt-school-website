<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::resource('admin-galleries', GalleryController::class);
Route::get('admin-galleries/delete-gallery/{id}', [GalleryController::class, 'deleteGallery'])->name('admin-galleries.delete_gallery');
