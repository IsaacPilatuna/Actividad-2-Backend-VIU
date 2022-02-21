@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Directores</h2>
    </div>
    <div class="card-body">
        <div class="buttons-container">
            <a class="btn btn-primary" href="directors/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Acciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach($directors as $director)
                <tr>

                    <td>{{$director->id}}</td>
                    <td>{{$director->firstName}}</td>
                    <td>{{$director->lastName}}</td>
                    <td>{{$director->dateOfBirth}}</td>
                    <td>{{$director->nationality}}</td>

                    <td>
                        <form class="buttons-container" action="/directors/delete/{{$director->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/directors/edit/{{$director->id}}" class="btn btn-primary">
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
        {{$directors->links()}}
    </div>
</div>
{{$directors->links()}}
@endsection()
