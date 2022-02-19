@extends('plantillabase')
@section('contenido')
    <a class="btn btn-primary" href="lenguajes/create">Crear</a>
    <table class="table table-dark table striped mt -4">

        <thead>

        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">ISO CODE</th>
            <th scope="col">Acciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($idiomas as $idioma)
            <tr>

                <td>{{$idioma->id}}</td>
                <td>{{$idioma->name}}</td>
                <td>{{$idioma->codigoISO}}</td>



                <td >
                    <form action="/lenguajes/delete/{{$idioma->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <a href="/lenguajes/edit/{{$idioma->id}}" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$idiomas->links()}}
@endsection()
