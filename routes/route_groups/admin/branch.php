<?php

use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;


Route::resource('admin-branches', BranchController::class);
Route::get('admin-branches/archived-branch/show-archived-branch', [BranchController::class, 'showArchivedBranch'])->name('admin-branches.show_archived_branch');
Route::get('admin-branches/archived-branch/{id}', [BranchController::class, 'archivedBranch'])->name('admin-branches.archived_branch');
