@extends('plantillabase');

@section('contenido')
    <h2>Editar Serie</h2>
    <form action="/series/update/{{$serie->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Titulo</label>
            <input id="titulo" name="titulo" type="text" class="form-control" tabindex="2" value={{$serie->titulo}}>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Plataforma ID</label>
            <input id="idPlataforma" name="idPlataforma" type="number" class="form-control" tabindex="3" value={{$serie->idPlataforma}}>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Director ID</label>
            <input id="idDirector" name="idDirector" type="number" class="form-control" tabindex="4" value={{$serie->idDirector}}>
        </div>
        <a href="/series" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@endsection
