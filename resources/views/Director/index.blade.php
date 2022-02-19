@extends('plantillabase')
@section('contenido')
    <a class="btn btn-primary" href="directores/create">Crear</a>
    <table class="table table-dark table striped mt -4">

        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">surname</th>
            <th scope="col">borndate</th>
            <th scope="col">nationality</th>
            <th scope="col">Acciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($directores as $director)
            <tr>

                <td>{{$director->id}}</td>
                <td>{{$director->name}}</td>
                <td>{{$director->apellidos}}</td>
                <td>{{$director->borndate}}</td>
                <td>{{$director->nacionalidad}}</td>



                <td >
                    <form action="/directores/delete/{{$director->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <a href="/directores/edit/{{$director->id}}" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$directores->links()}}
@endsection()
