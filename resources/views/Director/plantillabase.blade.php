<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>

<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="/">
                <i class="bi-pc-display"></i> Home
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="/plataformas">
                <i class="bi-pc-display"></i> Plataforma
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="/actores">
                <i class="bi-person-badge-fill"></i> Actor
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="/directores">
                <i class="bi-person-workspace"></i> Director
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="/lenguajes">
                <i class="bi-globe"></i> Idioma
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="/series">
                <i class="bi-film"></i> Serie
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success">
                <i class="bi-person-fill"></i> Cerrar sesión
            </a>
        </li>
    </ul>
</nav>
<h1 class="bg-white text-black text-center">Biblioteca de series</h1>
<h1 class="bg-white text-black text-center">Plataformas disponibles</h1>
<div class="container">
    @yield('contenido')
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
