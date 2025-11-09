<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Idea $idea)
    {
        $request->validate([
            'comment' => 'required|string|max:1000'
        ]);
        // TODO modificar que o content será comment
        $idea->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->comment
        ]);
         return back();
    }

    public function update(Request $request, Comment $comment)
    {
        $user = auth()->user();
        if ($user->id !== $comment->user_id) {
            abort(403, 'Você não tem permissão para editar este comentário.');
        }
        $validated = $request->validate([
        'content' => 'required|string|max:1000',
        ]);
        $comment->update([
            'content' => $validated['content'],
        ]);
        return redirect()->back();
    }
    
    public function destroy(Comment $comment)
    {
        $user = auth()->user();
        if ($user->id !== $comment->user_id && $user->id !== $comment->idea->user_id) {
            abort(403, 'Você não tem permissão para excluir este comentário.');
        }
        $comment->delete();
        return redirect()->back();
    }
}
