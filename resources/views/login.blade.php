<!doctype html>
<html lang="en-es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/styles.css">


</head>

<body class="body">
    <div class="container card-container">
        <div class="card login-card">
            <div class="card-header">
                <h1>
                    <i class="bi bi-person-circle"></i> Iniciar Sesión
                </h1>
            </div>
            <div class="card-body">
                <form id="form" method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" placeholder="Correo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control">
                    </div>
                </form>
            </div>
            <div class="buttons-container">
                <button class="btn btn-primary" type="submit" form="form">
                    <i class="bi bi-door-open-fill"></i> Iniciar Sesión
                </button>
            </div>
        </div>

    </div>
</body>

</html>
