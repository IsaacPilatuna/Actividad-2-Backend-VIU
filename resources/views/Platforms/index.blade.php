@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Plataformas</h2>
        <div class="buttons-container">
            <a class="btn btn-primary" href="platforms/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
    </div>
    <div class="card-body">
        <form  action="/platforms" method="POST">
            @csrf
            <div class="form-group search">
                <input type="text" class="form-control" placeholder="Buscar plataformas" name="searchString" value="{{$searchString}}">
                <div class="input-group-prepend">
                    <button class="input-group-text"><i class="bi bi-search"></i> </button>
                </div>
            </div>
        </form>
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
                @if (count($platforms) === 0)
                <tr>
                    <td colspan="3" class="no-results">No se han encontrado resultados</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$platforms->links()}}
    </div>
</div>
@endsection()
