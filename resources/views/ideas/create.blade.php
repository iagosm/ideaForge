@extends('layouts.app')

@section('title', 'Criar Nova Ideia')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="shadow-sm card">
                <div class="text-white card-header bg-primary">
                    <h5 class="mb-0">Criar nova ideia</h5>
                </div>
                <div class="card-body">
                    @include('ideas._form', [
                        'action' => route('ideas.store'),
                        'method' => 'POST',
                        'submitLabel' => 'Salvar Ideia',
                        'cancelRoute' => route('ideas.index'),
                        'idea' => null,
                    ])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
