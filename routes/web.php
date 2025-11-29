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


    Route::resource('ideas', IdeaController::class)->except(['index', 'show']);
    // Route::post('/ideas/{idea}/vote', [VoteController::class, 'store'])->name('ideas.vote');
    // Route::post('/comments/{comment}/vote', [VoteController::class, 'storeComment'])->name('comments.vote');


    // Voto de comentário ou IDEA
    Route::post('/vote', [VoteController::class, 'store'])->name('vote.store');


    // Comentários
    Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

Route::get('/', [IdeaController::class, 'index'])->name('ideas.index');

Route::get('/my-ideas', [IdeaController::class, 'myIdeas'])->name('ideas.mine');
Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

// Likes e dislikes dos comentários
// Route::post('/comments/{comment}/like', [CommentController::class, 'like'])->name('comments.like');
// Route::post('/comments/{comment}/dislike', [CommentController::class, 'dislike'])->name('comments.dislike');
// 
require __DIR__.'/auth.php';





Route::get('/template', function () {
    return view('teste');
});