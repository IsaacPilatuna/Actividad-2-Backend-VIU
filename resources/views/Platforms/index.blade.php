@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Plataformas</h2>
    </div>
    <div class="card-body">
        <div class="buttons-container">
            <a class="btn btn-primary" href="platforms/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
        <table class="table table-striped table-bordered">

            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>

            </thead>
            <tbody>
                @foreach($platforms as $platform)
                <tr>
                    <td>{{$platform->id}}</td>
                    <td>{{$platform->name}}</td>
                    <td>
                        <form class="buttons-container" action="/platforms/delete/{{$platform->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/platforms/edit/{{$platform->id}}" class="btn btn-primary">
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
        {{$platforms->links()}}
    </div>
</div>
@endsection()
