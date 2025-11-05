@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Minhas Ideias</h1>
        <a href="{{ route('ideas.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nova Ideia
        </a>
    </div>

    @if($ideas->count())
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($ideas as $idea)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $idea->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($idea->description, 100) }}</p>

                            @if($idea->tags->count())
                                <p>
                                    @foreach ($idea->tags as $tag)
                                        <span class="badge bg-info text-dark">{{ $tag->name }}</span>
                                    @endforeach
                                </p>
                            @endif

                            <a href="{{ route('ideas.show', $idea) }}" class="btn btn-outline-primary btn-sm">
                                Ver
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-secondary text-center">
            Você ainda não criou nenhuma ideia 😅
            <br>
            <a href="{{ route('ideas.create') }}" class="btn btn-primary mt-2">Criar agora</a>
        </div>
    @endif
</div>
@endsection
