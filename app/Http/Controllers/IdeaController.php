<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ideas = Idea::with('tags')->get();
        return view('ideas.index', compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('ideas.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tag_id' => 'required|exists:tags,id',
        ]);

        // Cria a ideia vinculada ao usuário logado
        $idea = Idea::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'user_id' => Auth::id(),
        ]);

        // Associa a tag única na tabela pivot idea_tag
        $idea->tags()->attach($validated['tag_id']);

        return redirect()->route('ideas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        $idea->load(['comments.user']);
        $idea->comments = $idea->comments->sortByDesc('created_at');
        // dd($idea->comments);
        return view('ideas.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function myIdeas()
    {
        $ideas = Idea::where('user_id', auth()->id())->latest()->get();

        return view('ideas.my', compact('ideas'));
    }
}
