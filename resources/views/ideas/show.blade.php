@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <!-- Ideia -->
    <div class="mb-4 shadow-sm card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h1 class="card-title">{{ $idea->title }}</h1>
                    <p class="mb-2 text-muted">
                        Criado em: {{ $idea->created_at->format('d/m/Y H:i') }} |
                        Atualizado em: {{ $idea->updated_at->format('d/m/Y H:i') }}
                    </p>
                </div>

                <!-- Menu de opções da ideia (só aparece se for o dono) -->
                @if(auth()->check() && auth()->id() === $idea->user_id)
                    <div class="dropdown">
                        <button class="p-0 btn btn-link text-dark" type="button" id="dropdownIdeaMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownIdeaMenu">
                            <li>
                                <a href="{{ route('ideas.edit', $idea) }}" class="dropdown-item text-primary">
                                    ✏️ Editar Ideia
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('ideas.destroy', $idea) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta ideia?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger">🗑️ Excluir Ideia</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>

            <p class="card-text">{{ $idea->description }}</p>

            <div class="mt-3 d-flex align-items-center">
                <!-- Likes/Dislikes da ideia -->
                <form action="{{ route('vote.store') }}" method="POST" class="me-2">
                    @csrf
                    <input type="hidden" name="votable_id" value="{{ $idea->id }}">
                    <input type="hidden" name="votable_type" value="idea">
                    <input type="hidden" name="is_like" value="1">
                    <button type="submit" class="btn btn-outline-success btn-sm">
                        👍 {{ $idea->likes_count ?? 0 }}
                    </button>
                </form>

                <form action="{{ route('vote.store') }}" method="POST" class="me-3">
                    @csrf
                    <input type="hidden" name="votable_id" value="{{ $idea->id }}">
                    <input type="hidden" name="votable_type" value="idea">
                    <input type="hidden" name="is_like" value="0">
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        👎 {{ $idea->dislikes_count ?? 0 }}
                    </button>
                </form>
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

                        <!-- Menu de opções do comentário -->
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
                        <!-- Likes do comentário -->
                        <form action="{{ route('vote.store') }}" method="POST" class="me-2">
                            @csrf
                            <input type="hidden" name="votable_id" value="{{ $comment->id }}">
                            <input type="hidden" name="votable_type" value="comment">
                            <input type="hidden" name="is_like" value="1">
                            <button type="submit" class="btn btn-outline-success btn-sm">
                                👍 {{ $comment->likes_count ?? 0 }}
                            </button>
                        </form>

                        <form action="{{ route('vote.store') }}" method="POST" class="me-2">
                            @csrf
                            <input type="hidden" name="votable_id" value="{{ $comment->id }}">
                            <input type="hidden" name="votable_type" value="comment">
                            <input type="hidden" name="is_like" value="0">
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                👎 {{ $comment->dislikes_count ?? 0 }}
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Modal de Edição do Comentário -->
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
        </div>
    </div>
</div>
@endsection
