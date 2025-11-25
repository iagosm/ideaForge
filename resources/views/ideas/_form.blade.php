<form action="{{ $action }}" method="POST">
    @csrf
    @if ($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Título da Ideia</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $idea?->title) }}" placeholder="Digite um título interessante..." required>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrição</label>
        <textarea name="description" id="description" rows="5"
            class="form-control @error('description') is-invalid @enderror" placeholder="Descreva sua ideia em detalhes..."
            required>{{ old('description', $idea?->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tag_id" class="form-label">Tag</label>
        <select name="tag_id" id="tag_id" class="form-select @error('tag_id') is-invalid @enderror" required>
            <option value="">Selecione uma tag</option>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}"
                    {{ old('tag_id', $idea?->tags->first()->id ?? '') == $tag->id ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
        @error('tag_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-end">
        <button type="submit" class="btn {{ $method === 'PUT' ? 'btn-primary' : 'btn-success' }}">
            {{ $submitLabel }}
        </button>
        <a href="{{ $cancelRoute }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>