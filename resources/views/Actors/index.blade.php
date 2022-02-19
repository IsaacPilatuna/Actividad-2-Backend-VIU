@extends('plantillabase')
@section('contenido')
    <a class="btn btn-primary" href="actores/create">Crear</a>
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
        @foreach($actores as $actor)
            <tr>

                <td>{{$actor->id}}</td>
                <td>{{$actor->name}}</td>
                <td>{{$actor->apellidos}}</td>
                <td>{{$actor->borndate}}</td>
                <td>{{$actor->nacionalidad}}</td>



                <td >
                    <form action="/actores/delete/{{$actor->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <a href="/actores/edit/{{$actor->id}}" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$actores->links()}}
@endsection()
