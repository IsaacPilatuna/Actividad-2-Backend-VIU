@extends('base-template')

@section('content')

<div class="card">
    <div class="card-header text-center">
        <h1>Plataformas disponibles</h1>
    </div>
    <div class="card-body">
        <form  action="/" method="POST">
            @csrf
            <div class="form-group">
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
                </tr>
            </thead>
            <tbody>
                @foreach($platforms as $platform)
                <tr>
                    <td>{{$platform->id}}</td>
                    <td>{{$platform->name}}</td>
                </tr>
                @endforeach
                @if (count($platforms) === 0)
                <tr>
                    <td colspan="2" class="no-results">No se han encontrado resultados</td>
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
