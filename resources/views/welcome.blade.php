<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css.map">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css.map">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:700&display=swap" rel="stylesheet">
        <title>Validador</title>
    </head>
    <body>
        <div class="col-md-6 panel-log">
            <p class="titulo-index">Bienvenido Estudiante del ITESCAM</p>
            <p class="subtitulo-index">Es tu momento de evaluar con toda la objetividad el material de tus materias para mejorarlo</p>
            <form action="" class="formulario" method="post">
                <label for="">Matricula</label>
                <input type="number" name="" id="" placeholder="5871">
                <label for="">Contraseña</label>
                <input type="password" name="" id="" placeholder="**********">
                <button type="submit">Ingresar</button>
            </form>
        </div>
        <div class="col-md-6 imagen">
            <img src="img/cover.jpg">
        </div>
    </body>
</html>
