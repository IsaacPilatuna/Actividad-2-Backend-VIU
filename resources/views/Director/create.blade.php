@extends('plantillabase');

@section('contenido')
    <h2>Crear Director</h2>
    <form action="/directores/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" tabindex="2">
            <label for="" class="form-label">Apellidos</label>
            <input id="surname" name="surname" type="text" class="form-control" tabindex="3">
            <label for="" class="form-label"> Fecha de nacimiento</label>
            <input id="borndate" name="borndate" type="date" class="form-control" tabindex="4">
            <label for="" class="form-label">Nacionalidad</label>
            <input id="nationality" name="nationality" type="text" class="form-control" tabindex="5">

        </div>
        <a href="/actores" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
    </form>
@endsection
