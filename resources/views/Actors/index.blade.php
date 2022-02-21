@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Actores</h2>
    </div>
    <div class="card-body">
        <div class="buttons-container">
            <a class="btn btn-primary" href="actors/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Acciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach($actors as $actor)
                <tr>

                    <td>{{$actor->id}}</td>
                    <td>{{$actor->firstName}}</td>
                    <td>{{$actor->lastName}}</td>
                    <td>{{$actor->dateOfBirth}}</td>
                    <td>{{$actor->nationality}}</td>

                    <td>
                        <form class="buttons-container" action="/actors/delete/{{$actor->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/actors/edit/{{$actor->id}}" class="btn btn-primary">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
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
    <div class="card-footer">
        {{$actors->links()}}
    </div>
</div>
@endsection()
