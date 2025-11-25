<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Idea::class, 'idea');
    }
    public function index()
    {
        $ideas = Idea::with('tags')
        ->withCount([
            'votes as likes_count' => function ($query) {
                $query->where('is_like', true);
            },
            'votes as dislikes_count' => function ($query) {
                $query->where('is_like', false);
            },
        ])
        ->latest()
        ->get();
        return view('ideas.index', compact('ideas'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('ideas.create', compact('tags'));
    }

    public function store(IdeaRequest $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tag_id' => 'required|exists:tags,id',
        ]);
        $idea = Idea::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'user_id' => Auth::id(),
        ]);
        $idea->tags()->attach($validated['tag_id']);

        return redirect()->route('ideas.index');
    }

    public function show(Idea $idea)
    {
        $idea->loadCount([
            'votes as likes_count' => function ($query) {
                $query->where('is_like', true);
            },
            'votes as dislikes_count' => function ($query) {
                $query->where('is_like', false);
            },
        ]);
        $idea->load([
            'comments.user',
        ]);
        $idea->comments->loadCount([
            'votes as likes_count' => function ($query) {
                $query->where('is_like', true);
            },
            'votes as dislikes_count' => function ($query) {
                $query->where('is_like', false);
            },
        ]);
        $idea->comments = $idea->comments->sortByDesc('created_at');
        return view('ideas.show', compact('idea'));
    }

    public function edit(string $id)
    {
        $idea = Idea::findOrFail($id);
        $idea->tags();
        $tags = Tag::all();
        return view('ideas.edit', [
            'idea' => $idea,
            'tags' => $tags
        ]);
    }

    public function update(IdeaRequest $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tag_id' => 'required|exists:tags,id',
        ]);
        $idea = Idea::findOrFail($id);
        if($idea->user_id !== auth()->id()) {
            abort(403, 'Você não tem permissão para editar esta ideia.');
        }
        $idea->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);
        $idea->tags()->sync([$validated['tag_id']]);
        return redirect("ideas/$id");
    }

    public function destroy(string $id)
    {
        $idea = Idea::findOrFail($id);
        if(auth()->id() !== $idea->user_id) {
            abort(403, "Você não tem permissão para excluir essa Ideia");
        }
        $idea->delete();
        return redirect("/");
    }

    public function myIdeas()
    {
        $ideas = Idea::where('user_id', auth()->id())->latest()->get();
        return view('ideas.my', compact('ideas'));
    }
}
