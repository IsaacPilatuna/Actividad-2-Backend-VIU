@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Editar actor</h2>
    </div>
    <div class="card-body">
        <form id="form" action="/actors/update/{{$actor->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="firstName" class="form-label">Nombre</label>
                <input id="firstName" name="firstName" type="text" class="form-control" value="{{$actor->firstName}}">
            </div>
            <div class="form-group">
                <label for="lastName" class="form-label">Apellidos</label>
                <input id="lastName" name="lastName" type="text" class="form-control" value="{{$actor->lastName}}">
            </div>
            <div class="form-group">
                <label for="dateOfBirth" class="form-label"> Fecha de nacimiento</label>
                <input id="dateOfBirth" name="dateOfBirth" type="date" class="form-control" value="{{$actor->dateOfBirth}}">
            </div>
            <div class="form-group">
                <label for="nationality" class="form-label">Nacionalidad</label>
                <input id="nationality" name="nationality" type="text" class="form-control" value="{{$actor->nationality}}">
            </div>
        </form>
    </div>
    <div class="card-footer buttons-container">
            <button type="submit" class="btn btn-primary" form="form">
            <i class="bi bi-check-circle"></i> Guardar
        </button>
            <a href="/actors" class="btn btn-secondary">
            <i class="bi bi-x-circle"></i> Cancelar
        </a>
    </div>
</div>
@endsection
