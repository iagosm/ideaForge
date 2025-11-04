@extends('layouts.app')

@section('title', 'Lista de Ideias')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Lista de Ideias</h1>
        <div>
            <a href="{{ route('ideas.mine') }}" class="btn btn-outline-secondary me-2">
                <i class="fas fa-user"></i> Minhas Ideias
            </a>
            <a href="{{ route('ideas.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Nova Ideia
            </a>
        </div>
    </div>

    @if($ideas->count())
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($ideas as $idea)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $idea->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($idea->description, 120) }}</p>

                            @if($idea->tags->count())
                                <p>
                                    @foreach ($idea->tags as $tag)
                                        <span class="badge bg-info text-dark">{{ $tag->name }}</span>
                                    @endforeach
                                </p>
                            @endif

                            <a href="{{ route('ideas.show', $idea) }}" class="btn btn-outline-primary btn-sm">
                                Ver Detalhes
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-secondary text-center">
            Nenhuma ideia cadastrada ainda.
            <br>
            <a href="{{ route('ideas.create') }}" class="btn btn-primary mt-2">Criar primeira ideia</a>
        </div>
    @endif
</div>
@endsection
