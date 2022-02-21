@extends('base-template')

@section('content')

<div class="card">
    <div class="card-header text-center">
        <h1>Plataformas disponibles</h1>
    </div>
    <div class="card-body">
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
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$platforms->links()}}
    </div>
</div>



@endsection()
