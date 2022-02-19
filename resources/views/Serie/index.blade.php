@extends('plantillabase')
@section('contenido')
    <a class="btn btn-primary" href="series/create">Crear</a>
    <table class="table table-dark table striped mt -4">

        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">idPlataforma</th>
            <th scope="col">idDirector</th>
            <th scope="col">Acciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($series as $serie)
            <tr>
                <td>{{$serie->id}}</td>
                <td>{{$serie->titulo}}</td>
                <td>{{$serie->idPlataforma}}</td>
                <td>{{$serie->idDirector}}</td>
                <td >
                    <form action="/series/delete/{{$serie->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <a href="/series/edit/{{$serie->id}}" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$series->links()}}
@endsection()
