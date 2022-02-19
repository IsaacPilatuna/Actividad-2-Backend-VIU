@extends('plantillabase');

@section('contenido')
    <h2>Editar Actor</h2>
    <form action="/actores/update/{{$actor->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="2" value={{$actor->name}}>
            <label for="" class="form-label">Apellidos</label>
            <input id="surname" name="surname" type="text" class="form-control" tabindex="3" value={{$actor->apellidos}}>
            <label for="" class="form-label"> Fecha de nacimiento</label>
            <input id="borndate" name="borndate" type="date" class="form-control" tabindex="4" value={{$actor->borndate}}>
            <label for="" class="form-label">Nacionalidad</label>
            <input id="nationality" name="nationality" type="text" class="form-control" tabindex="5" value={{$actor->nacionalidad}}>
        </div>
        <a href="/actores" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection
