<!php>
<!doctype html>
<head>
    <meta charset="UTF-8"/>
    <title>formulario</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
    <h1 class="page-link">Formulario para registro de datos </h1>
    <form method="POST" action="formulario">
    @csrf
    <label  class="col-sm-2 col-form-label col-form-label-lg" >Matricula</label>
    <input  type="number" min="0" name="matricula">
    <br> 
    <br> 
    <label class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nombre">
    </div>
    <br> 
    <br> 

    <label class="col-sm-2 col-form-label col-form-label-lg">Primer Apellido</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="priapellido">
    </div>
    <br> 
    <br> 

    <label class="col-sm-2 col-form-label col-form-label-lg">Segundo Apellido</label>
    <div class="col-sm-10">  
    <input type="text" class="form-control" name="segapellido">
    </div>
    <br> 
    <br> 

    <label  class="col-sm-2 col-form-label col-form-label-lg">Edad</label>
    <input type="number" maxlength="3" minlength="1" min="1" max="130" name="edad">
    <br>
    <br>  

    <label class="col-sm-2 col-form-label col-form-label-lg">Fecha de nacimiento</label>
    <br> 
    <input type="date" name="born">
    <br> 
    <br> 

    <label >Sexo</label>
    <select name="genero">
        <option value='null' selected>Selecciona</option> 
        <option value="Masculino">Masculino</option> 
        <option value="Femenino">Femenino</option>
    </select>
    <br> 
    <br> 
    <label class="col-sm-2 col-form-label col-form-label-lg">Estado Civil</label>
    <br>
    <select name="estado">
        <option value='null' selected>Selecciona</option> 
        <option value="Soltero">Soltero</option> 
        <option value="Casado">Casado</option>
        <option value="Divorciado">Divorciado</option>
        <option value="Viudo">Viudo</option>
        <option value="Concubinato">Concubinato</option>
    </select>
    <br>
    <br>
    <input type="submit"  class="btn btn-success" value="Guardar">
    </form>
    
    
</body>
</html>
<!php>