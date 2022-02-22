@extends('base-template')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Idiomas</h2>
        <div class="buttons-container">
            <a class="btn btn-primary" href="languages/create">
                <i class="bi bi-plus-circle"></i> Crear
            </a>
        </div>
    </div>
    <div class="card-body">
        <form  action="/languages" method="POST">
            @csrf
            <div class="form-group search">
                <input type="text" class="form-control" placeholder="Buscar idiomas" name="searchString" value="{{$searchString}}">
                <div class="input-group-prepend">
                    <button class="input-group-text"><i class="bi bi-search"></i> </button>
                </div>
            </div>
        </form>
        <table class="table  table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Código ISO</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($languages as $language)
                <tr>

                    <td>{{$language->id}}</td>
                    <td>{{$language->name}}</td>
                    <td>{{$language->isoCode}}</td>

                    <td>
                        <form class="buttons-container" action="/languages/delete/{{$language->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/languages/edit/{{$language->id}}" class="btn btn-primary">
                                <i class="bi bi-pencil"></i> Editar
                            </a>
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @if (count($languages) === 0)
                <tr>
                    <td colspan="4" class="no-results">No se han encontrado resultados</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$languages->links()}}
    </div>
</div>
@endsection()
