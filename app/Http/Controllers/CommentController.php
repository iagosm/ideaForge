<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Comment::class, 'comment');
    }
    public function store(CommentRequest $request, Idea $idea)
    {
        // TODO modificar que o content será comment
        $idea->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->comment
        ]);
         return back();
    }

    public function update(CommentRequest $request, Comment $comment)
    {
        $user = auth()->user();
        if ($user->id !== $comment->user_id) {
            abort(403, 'Você não tem permissão para editar este comentário.');
        }
        $comment->update([
            'content' => $request['content'],
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
