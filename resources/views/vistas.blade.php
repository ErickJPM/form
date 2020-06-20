<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <title>DATOS RECIBIDOS</title>
</head>
<body>

    <h1 class="page-link">Aqui vemos el envio de datos de un formulario en Laravel</h1>
    <h2 class="h2">Matricula: <?php echo request('matricula')?></h2>

    <h2 class="h2">Nombre: <?php echo request('nombre')?></h2>
    <h2 class="h2">Primer Apellido: <?php echo request('priapellido')?></h2>
    <h2 class="h2">Segundo Apellido: <?php echo request('segapellido')?></h2>
    <h2 class="h2">Edad: <?php echo request('edad')?></h2>
    <h2 class="h2">Fecha de Nacimiento: <?php echo request('born')?></h2>
    <h2 class="h2">Sexo: <?php echo request('genero')?></h2>
    <h2 class="h2">Estado: <?php echo request('estado')?></h2>
</body>
</html>