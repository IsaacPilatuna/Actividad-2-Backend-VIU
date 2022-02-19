@extends('plantillabase');

@section('contenido')
    <h2>Editar Idioma</h2>
    <form action="/lenguajes/update/{{$idioma->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="2" value={{$idioma->name}}>
            <label for="" class="form-label">codigoISO</label>
            <input id="codigoISO" name="codigoISO" type="text" class="form-control" tabindex="3" value={{$idioma->codigoISO}}>
        </div>
        <a href="/lenguajes" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection
