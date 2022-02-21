@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Editar Plataforma</h2>
    </div>
    <div class="card-body">
        <form id="form" action="/platforms/update/{{$platform->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" name="name" type="text" class="form-control" value="{{$platform->name}}">
            </div>
        </form>
    </div>
    <div class="card-footer buttons-container">
            <button type="submit" class="btn btn-primary" form="form">
            <i class="bi bi-check-circle"></i> Guardar
        </button>
            <a href="/platforms" class="btn btn-secondary">
            <i class="bi bi-x-circle"></i> Cancelar
        </a>
    </div>
</div>
@endsection
