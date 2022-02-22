@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Series</h2>
        <div class="buttons-container">
            <a class="btn btn-primary" href="series/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="/series" method="POST">
            @csrf
            <div class="form-group search">
                <input type="text" class="form-control" placeholder="Buscar series" name="searchString" value="{{$searchString}}">
                <div class="input-group-prepend">
                    <button class="input-group-text"><i class="bi bi-search"></i> </button>
                </div>
            </div>
        </form>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Plataforma</th>
                    <th scope="col">Director</th>
                    <th scope="col">Actores</th>
                    <th scope="col">Idiomas</th>
                    <th scope="col">Acciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach($series as $serie)
                <tr>
                    <td>{{$serie->id}}</td>
                    <td>{{$serie->title}}</td>
                    <td>{{$serie->platform->name}}</td>
                    <td>{{$serie->director->firstName}} {{$serie->director->lastName}}</td>
                    <td>
                        <ul>
                            @foreach($serie->actors as $actor)
                            <li>{{$actor->firstName}} {{$actor->lastName}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <strong>Audios</strong>
                        <ul>
                            @foreach($serie->audios as $audio)
                            <li>{{$audio->name}} - {{$audio->isoCode}}</li>
                            @endforeach
                        </ul>
                        <strong>Subtítulos</strong>
                        <ul>
                            @foreach($serie->subtitles as $subtitle)
                            <li>{{$subtitle->name}} - {{$subtitle->isoCode}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <form class="buttons-container" action="/series/delete/{{$serie->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @if (count($series) === 0)
                <tr>
                    <td colspan="7" class="no-results">No se han encontrado resultados</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$series->links()}}
    </div>
</div>
{{$series->links()}}
@endsection()
