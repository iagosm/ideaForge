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

// Route::middleware('auth')->group(function () {
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
// });

// Route::get('/', [IdeaController::class, 'index'])->name('ideas.index');

Route::get('/my-ideas', [IdeaController::class, 'myIdeas'])->name('ideas.mine');
// Route::get('/idea/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

// Likes e dislikes dos comentários
// Route::post('/comments/{comment}/like', [CommentController::class, 'like'])->name('comments.like');
// Route::post('/comments/{comment}/dislike', [CommentController::class, 'dislike'])->name('comments.dislike');
// 
require __DIR__ . '/auth.php';


// ============================================
// ROTAS PÚBLICAS - PÁGINAS ESTÁTICAS
// ============================================

Route::get('/', function () {
  return view('pages.home.index');
})->name('template');

Route::get('/how-it-works', function () {
  return view('pages.guide.index');
})->name('how.it.works');

Route::get('/explore', function () {
  return view('pages.explore.index');
})->name('explore');

// ============================================
// ROTAS PÚBLICAS - IDEIAS
// ============================================

Route::get('/idea/{idea}', function ($idea) {
  return view('pages.idea.show', ['idea' => $idea]);
})->name('idea.show');

// ============================================
// ROTAS AUTENTICADAS - PERFIL E CONQUISTAS
// ============================================

// Route::middleware('auth')->group(function () {
  Route::get('/perfil', function () {
    return view('pages.profile.show');
  })->name('profile.show');

  Route::get('/conquista', function () {
    return view('pages.achievements.index');
  })->name('achievements.index');
// });

// ============================================
// ROTAS AUTENTICADAS - MENSAGENS
// ============================================

// Route::middleware('auth')->group(function () {
  Route::get('/chat', function () {
    return view('pages.messages.index');
  })->name('messages.index');

  Route::get('/message/{user?}', function ($user = null) {
    return view('pages.messages.show', ['user' => $user]);
  })->name('messages.show');
// });

// ============================================
// ROTAS AUTENTICADAS - NOTIFICAÇÕES
// ============================================

// Route::middleware('auth')->group(function () {
  Route::get('/notificacao', function () {
    return view('pages.notifications.index');
  })->name('notifications.index');
// });

// ============================================
// ROTAS AUTENTICADAS - BUSCA
// ============================================

// Route::middleware('auth')->group(function () {
  Route::get('/pessoas', function () {
    return view('pages.people.search');
  })->name('people.search');
// });