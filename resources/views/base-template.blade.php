<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/styles.css">

</head>

<body class="body">

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">
            <img src="/assets/images/logoVIU.png"  height="64" alt="Logo VIU">
        </a>
        <ul class="navbar-nav w-100">
            <li class="nav-item">
                <a class="btn btn-lg btn-outline-success" href="/">
                    <i class="bi-house-fill"></i> Inicio
                </a>
            </li>

            @auth
            <li class="nav-item">
                <a class="btn btn-lg btn-outline-success" href="/platforms">
                    <i class="bi-pc-display"></i> Plataformas
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg btn-outline-success" href="/actors">
                    <i class="bi-person-badge-fill"></i> Actores
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg btn-outline-success" href="/directors">
                    <i class="bi-person-workspace"></i> Directores
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg btn-outline-success" href="/languages">
                    <i class="bi-globe"></i> Idiomas
                </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg btn-outline-success" href="/series">
                    <i class="bi-film"></i> Series
                </a>
            </li>
            @endauth
            @guest
                <li class="nav-item self-right">
                    <a class="btn btn-lg btn-outline-primary" href="/login">
                        <i class="bi-door-open-fill"></i> Iniciar sesión
                    </a>
                </li>
            @endguest
            @auth
                <li class="nav-item self-right">
                    <a class="btn btn-lg btn-outline-danger" href="/logout">
                        <i class="bi-door-open-fill"></i> Cerrar sesión
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
