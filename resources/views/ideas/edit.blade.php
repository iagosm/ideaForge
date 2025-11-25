@extends('layouts.app')

@section('title', 'Editar Ideia')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="shadow-sm card">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Editar Ideia</h5>
                </div>
                <div class="card-body">
                    @include('ideas._form', [
                        'action' => route('ideas.update', $idea->id),
                        'method' => 'PUT',
                        'submitLabel' => 'Atualizar Ideia',
                        'cancelRoute' => route('ideas.show', $idea->id),
                        'idea' => $idea,
                    ])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
