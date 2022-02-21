@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Crear serie</h2>
    </div>
    <div class="card-body">
        <form id="form" action="/series/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Titulo</label>
                <input id="title" name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="director"> Director</label>
                <select class="form-select" id="director" name="director" required>
                    <option disabled selected value> -- Seleccionar Director -- </option>
                    @foreach($directors as $director)
                    <option value="{{$director->id}}">{{$director->firstName}} {{$director->lastName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="platform"> Plataforma</label>
                <select class="form-select" id="platform" name="platform" required>
                    <option disabled selected value> -- Seleccionar Plataforma -- </option>
                    @foreach($platforms as $platform)
                    <option value="{{$platform->id}}">{{$platform->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="actors"> Actores</label>
                <select class="form-select" multiple id="actors" name="actors[]" required>
                    @foreach($actors as $actor)
                    <option value="{{$actor->id}}">{{$actor->firstName}} {{$actor->lastName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="audios"> Audios</label>
                <select class="form-select" multiple id="audios" name="audios[]" required>
                    @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->name}} - {{$language->isoCode}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="subtitles"> Subtítulos</label>
                <select class="form-select" multiple id="subtitles" name="subtitles[]" required>
                    @foreach($languages as $language)
                    <option value="{{$language->id}}">{{$language->name}} - {{$language->isoCode}}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
    <div class="card-footer buttons-container">
            <button type="submit" class="btn btn-primary" form="form">
            <i class="bi bi-check-circle"></i> Guardar
        </button>
            <a href="/series" class="btn btn-secondary">
            <i class="bi bi-x-circle"></i> Cancelar
        </a>
    </div>
</div>
@endsection
