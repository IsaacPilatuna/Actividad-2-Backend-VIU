@extends('plantillabase');

@section('contenido')
    <h2>Editar Director</h2>
    <form action="/directores/update/{{$director->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="2" value={{$director->name}}>
            <label for="" class="form-label">Apellidos</label>
            <input id="surname" name="surname" type="text" class="form-control" tabindex="3" value={{$director->apellidos}}>
            <label for="" class="form-label"> Fecha de nacimiento</label>
            <input id="borndate" name="borndate" type="date" class="form-control" tabindex="4" value={{$director->borndate}}>
            <label for="" class="form-label">Nacionalidad</label>
            <input id="nationality" name="nationality" type="text" class="form-control" tabindex="5" value={{$director->nacionalidad}}>
        </div>
        <a href="/directores" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection
