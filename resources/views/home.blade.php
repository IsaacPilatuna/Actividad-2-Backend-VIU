@extends('plantillabase')

@section('contenido')

    <table class="table table-dark table striped mt -4">

        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
        </tr>

        </thead>
        <tbody>
        @foreach($plataformas as $alm)
            <tr>
                <td>{{$alm->id}}</td>
                <td>{{$alm->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$plataformas->links('')}}


@endsection()

