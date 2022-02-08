<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

<h2>PLATAFORMAS</h2>

<table style="width:100%">

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>ACCIONES</th>
    </tr>
    @foreach($platform as $plataforma)


    <tr>
        <td>
            {{$plataforma->id}}
        </td>
        <td>
            {{$plataforma->name}}
        </td>
        <td>
            <button type="submit">Borrar</button>
            <button>Editar</button>
        </td>
    </tr>
    @endforeach
</table>



</body>
</html>


