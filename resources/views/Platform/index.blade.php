
@extends('plantillabase')
@section('contenido')
    <a class="btn btn-primary" href="plataformas/create">Crear</a>
    <table class="table table-dark table striped mt -4">

        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">Acciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($plataformas as $alm)
            <tr>
                <td>{{$alm->id}}</td>
                <td>{{$alm->name}}</td>
                <td >
                    <form action="/plataformas/delete/{{$alm->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                    <a href="/plataformas/edit/{{$alm->id}}" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$plataformas->links()}}
@endsection()
