@extends('plantillabase');

@section('contenido')
    <h2>Crear Idioma</h2>
    <form action="/lenguajes/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="2">
            <label for="" class="form-label">ISOcode</label>
            <input id="codigoISO" name="codigoISO" type="text" class="form-control" tabindex="3">

        </div>
        <a href="/lenguajes" class="btn btn-secondary" tabindex="4">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
    </form>
@endsection
