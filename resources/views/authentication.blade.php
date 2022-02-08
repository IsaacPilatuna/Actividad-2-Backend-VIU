<!doctype html>
<html  lang="en-es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login</title>
    <link href="resources/css/authentication.css" rel="stylesheet" type="text/css">


</head>
<body>
<div>
<h1>Login</h1>

    <form method="POST">
        @csrf
        <label> Email:
            <br>
            <input name="email" type="email" placeholder="Email">
        </label><br><br>
        <label> Password:
            <br>
            <input name="password" type="password" placeholder="Password">
        </label><br><br>
        <button type="submit">Login</button>
    </form>

</div>
</body>
</html>
