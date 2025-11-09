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
            @auth
                <form action="{{ route('comments.store', $idea) }}" method="POST" class="mb-4">
                    @csrf
                    <div class="mb-2">
                        <textarea name="comment" class="form-control" rows="3" placeholder="Escreva seu comentário..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Comentar</button>
                </form>
            @else
                <p class="text-muted">Faça login para comentar.</p>
            @endauth

            <!-- Comentários reais -->
            @forelse($idea->comments as $comment)
                <div class="p-3 mb-3 border rounded position-relative">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="mb-1"><strong>{{ $comment->user->name ?? 'Usuário desconhecido' }}</strong></p>
                            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                        </div>

                        <!-- Menu de opções -->
                        @if(auth()->check() && (auth()->id() === $comment->user_id || auth()->id() === $idea->user_id))
                            <div class="dropdown">
                                <button class="p-0 btn btn-link text-dark" type="button" id="dropdownMenu{{ $comment->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu{{ $comment->id }}">
                                    @if(auth()->id() === $comment->user_id)
                                        <li>
                                            <a href="#" class="dropdown-item text-primary" data-bs-toggle="modal" data-bs-target="#editCommentModal{{ $comment->id }}">
                                                ✏️ Editar
                                            </a>
                                        </li>
                                    @endif

                                    @if(auth()->id() === $comment->user_id || auth()->id() === $idea->user_id)
                                        <li>
                                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este comentário?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger">🗑️ Excluir</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </div>

                    <p class="mt-2">{{ $comment->content }}</p>

                    <div class="mt-1 d-flex align-items-center">
                        <button class="btn btn-outline-success btn-sm me-2">👍 {{ $comment->likes_count ?? 0 }}</button>
                        <button class="btn btn-outline-danger btn-sm">👎 {{ $comment->dislikes_count ?? 0 }}</button>
                    </div>
                </div>

                <!-- Modal de Edição -->
                @if(auth()->check() && auth()->id() === $comment->user_id)
                    <div class="modal fade" id="editCommentModal{{ $comment->id }}" tabindex="-1" aria-labelledby="editCommentModalLabel{{ $comment->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('comments.update', $comment->id) }}" method="POST" class="modal-content">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCommentModalLabel{{ $comment->id }}">Editar comentário</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <textarea name="content" class="form-control" rows="3" required>{{ $comment->content }}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            @empty
                <p class="text-muted">Nenhum comentário ainda. Seja o primeiro!</p>
            @endforelse

            <hr>

            <!-- Comentários de exemplo -->
            @php
                $sampleComments = [
                    (object)['id'=>1,'user'=> (object)['name'=>'Maria Souza'],'content'=>'Acho que o login via Google seria ótimo!','likes_count'=>3,'dislikes_count'=>0,'created_at'=>now()->subHours(2)],
                    (object)['id'=>2,'user'=> (object)['name'=>'Iago Sousa'],'content'=>'Também sugiro autenticação em duas etapas.','likes_count'=>5,'dislikes_count'=>1,'created_at'=>now()->subHour()],
                    (object)['id'=>3,'user'=> (object)['name'=>'João Pereira'],'content'=>'Boa ideia, mas cuidado com a complexidade do fluxo.','likes_count'=>1,'dislikes_count'=>0,'created_at'=>now()->subMinutes(30)],
                ];
            @endphp

            <h6 class="mt-4 text-secondary">Exemplo de como ficará:</h6>
            @foreach($sampleComments as $comment)
                <div class="p-3 mb-3 border rounded bg-light">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="mb-1"><strong>{{ $comment->user->name }}</strong></p>
                            <small class="mb-2 text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                        <button class="p-0 btn btn-link text-dark"><i class="fas fa-ellipsis-v"></i></button>
                    </div>
                    <p>{{ $comment->content }}</p>
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
