
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type='image/x-icon' href="resources/views/image/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Multiselect -->
    @stack('css')
    @push('css')
    <link rel="stylesheet" href="resources/css/index.css">
    @endpush
    <title>Actividad 2 - Backend - MASW04 - VIU</title>
</head>
<nav class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="{{ url('/platform') }}">
                <i class="bi-pc-display"></i> Plataforma
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success">
                <i class="bi-person-badge-fill"></i> Actor
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success">
                <i class="bi-person-workspace"></i> Director
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success">
                <i class="bi-globe"></i> Idioma
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success">
                <i class="bi-film"></i> Serie
            </a>
        </li>
        <li class="nav-item">
            <a class="btn btn-lg btn-outline-success" href="{{ url('/') }}">
                <i class="bi-person-fill"></i> Cerrar sesión
            </a>
        </li>
    </ul>
</nav>