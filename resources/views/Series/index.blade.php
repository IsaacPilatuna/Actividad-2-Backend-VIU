@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Series</h2>
    </div>
    <div class="card-body">
        <div class="buttons-container">
            <a class="btn btn-primary" href="series/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
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
            </tbody>
        </table>
    </div>
</div>
{{$series->links()}}
@endsection()
