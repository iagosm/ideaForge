@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <!-- Ideia -->
    <div class="mb-4 shadow-sm card">
        <div class="card-body">
            <h1 class="card-title">{{ $idea->title }}</h1>
            <p class="mb-2 text-muted">
                Criado em: {{ $idea->created_at->format('d/m/Y H:i') }} |
                Atualizado em: {{ $idea->updated_at->format('d/m/Y H:i') }}
            </p>
            <p class="card-text">{{ $idea->description }}</p>

            <div class="mt-3 d-flex align-items-center">
                <!-- Likes/Dislikes da ideia -->
                <form action="{{ route('ideas.like', $idea) }}" method="POST" class="me-2">
                    @csrf
                    <button type="submit" class="btn btn-outline-success btn-sm">
                        👍 {{ $idea->likes_count ?? 0 }}
                    </button>
                </form>
                <form action="{{ route('ideas.dislike', $idea) }}" method="POST" class="me-3">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        👎 {{ $idea->dislikes_count ?? 0 }}
                    </button>
                </form>

                <!-- Botão Editar Ideia (só aparece se for o dono) -->
                @if(auth()->id() === $idea->user_id)
                    <a href="{{ route('ideas.edit', $idea) }}" class="btn btn-primary btn-sm">Editar Ideia</a>
                @endif
            </div>
        </div>
    </div>

    <!-- Comentários -->
    <div class="shadow-sm card">
        <div class="card-body">
            <h5 class="mb-3 card-title">Comentários</h5>

            <!-- Form de novo comentário -->
            <form action="{{ route('comments.store', $idea) }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-2">
                    <textarea name="content" class="form-control" rows="3" placeholder="Escreva seu comentário..."></textarea>
                </div>
                <button type="submit" class="btn btn-success">Comentar</button>
            </form>

            <!-- Lista de comentários de exemplo -->
            @php
                $sampleComments = [
                    (object)['id'=>1,'user'=> (object)['name'=>'Maria Souza'],'content'=>'Acho que o login via Google seria ótimo!','likes_count'=>3,'dislikes_count'=>0,'created_at'=>now()->subHours(2)],
                    (object)['id'=>2,'user'=> (object)['name'=>'Iago Sousa'],'content'=>'Também sugiro autenticação em duas etapas.','likes_count'=>5,'dislikes_count'=>1,'created_at'=>now()->subHour()],
                    (object)['id'=>3,'user'=> (object)['name'=>'João Pereira'],'content'=>'Boa ideia, mas cuidado com a complexidade do fluxo.','likes_count'=>1,'dislikes_count'=>0,'created_at'=>now()->subMinutes(30)],
                ];
            @endphp

            @foreach($sampleComments as $comment)
                <div class="p-3 mb-3 border rounded">
                    <p class="mb-1"><strong>{{ $comment->user->name }}</strong></p>
                    <small class="mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</small>

                    @if(auth()->id() === 2 && $comment->user->name === 'Iago Sousa') {{-- exemplo usuário logado --}}
                        <form action="#" method="POST" class="mb-2">
                            <textarea name="content" class="mb-1 form-control" rows="2">{{ $comment->content }}</textarea>
                            <button type="submit" class="btn btn-primary btn-sm">Editar</button>
                        </form>
                    @else
                        <p>{{ $comment->content }}</p>
                    @endif

                    <div class="mt-1 d-flex align-items-center">
                        <button class="btn btn-outline-success btn-sm me-2">👍 {{ $comment->likes_count }}</button>
                        <button class="btn btn-outline-danger btn-sm">👎 {{ $comment->dislikes_count }}</button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
