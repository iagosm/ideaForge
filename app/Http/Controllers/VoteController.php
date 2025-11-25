<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Vote;

class VoteController extends Controller
{
    //    Route::post('/vote', [VoteController::class, 'store'])->name('vote.store');
    public function store(VoteRequest $request)
    {
        $modelClass = match ($request->votable_type) {
            'idea' => Idea::class,
            'comment' => Comment::class,
        };
        $votable = $modelClass::findOrFail($request->votable_id);
        $user = $request->user();
        $existing = Vote::where('user_id', $user->id)
            ->where('votable_id', $votable->id)
            ->where('votable_type', $modelClass)
            ->first();
        if($existing) {
            if ($existing->is_like == $request->is_like) {
                $existing->delete();
            } else {
                $existing->update(['is_like' => $request->is_like]);
            }
            return back();
        }
        Vote::create([
            'user_id' => $user->id,
            'votable_id' => $votable->id,
            'votable_type' => $modelClass,
            'is_like' => $request->is_like,
        ]);
        return back();
    }
}
