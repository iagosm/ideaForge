@extends('layouts.app')

@section('title', 'Criar Nova Ideia')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Criar nova ideia</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('ideas.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Título da Ideia</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}"
                                placeholder="Digite um título interessante..."
                                required
                            >
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrição</label>
                            <textarea 
                                name="description" 
                                id="description" 
                                rows="5"
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Descreva sua ideia em detalhes..."
                                required
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tag_id" class="form-label">Tag</label>
                            <select 
                                name="tag_id" 
                                id="tag_id" 
                                class="form-select @error('tag_id') is-invalid @enderror"
                                required
                            >
                                <option value="">Selecione uma tag</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" 
                                        {{ old('tag_id') == $tag->id ? 'selected' : '' }}>
                                        {{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Salvar Ideia</button>
                            <a href="{{ route('ideas.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
