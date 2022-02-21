@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Crear Idioma</h2>
    </div>
    <div class="card-body">
        <form id="form" action="/languages/update/{{$language->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input id="name" name="name" type="text" class="form-control" value="{{$language->name}}">
            </div>
            <div class="form-group">
                <label for="isoCode" class="form-label">Codigo ISO</label>
                <input id="isoCode" name="isoCode" type="text" class="form-control" value="{{$language->isoCode}}">
            </div>

        </form>
    </div>
    <div class="card-footer buttons-container">
            <button type="submit" class="btn btn-primary" form="form">
            <i class="bi bi-check-circle"></i> Guardar
        </button>
            <a href="/languages" class="btn btn-secondary">
            <i class="bi bi-x-circle"></i> Cancelar
        </a>
    </div>
</div>
@endsection

