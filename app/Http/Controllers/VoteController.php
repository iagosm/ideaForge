<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
//    Route::post('/vote', [VoteController::class, 'store'])->name('vote.store');
    public function store(Request $request)
    {
        $request->validate([
            "votable_id" => "required",
            "votable_type" => "required",
            "is_like" => "required"
        ]);
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
