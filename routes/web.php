<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('ideas', IdeaController::class)->except(['index']);
    Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::post('/ideas/{idea}/vote', [VoteController::class, 'store'])->name('ideas.vote');
    Route::post('/comments/{comment}/vote', [VoteController::class, 'storeComment'])->name('comments.vote');
});

Route::get('/', [IdeaController::class, 'index'])->name('ideas.index');

Route::get('/my-ideas', [IdeaController::class, 'myIdeas'])->name('ideas.mine');

require __DIR__.'/auth.php';
