@extends('plantillabase');

@section('contenido')
    <h2>Crear plataforma</h2>
    <form action="/plataformas/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="2">
        </div>
        <a href="/plataformas" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
    </form>
@endsection
