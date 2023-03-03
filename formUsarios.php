<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda DisneyForme - Pagina Formulario</title>

    <!-- Bootstap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--CSS -->
    <link rel="stylesheet" href="CSS/estiloFormulario.css">

</head>
<body>
    
    <!-- Navegabilidad -->
    <header class="header-style-1">

        <?php include('comun/top_header.php');?>
        <?php include('comun/nav_header.php');?>

    </header>

    <div class="d-flex justify-content-evenly">

        <form action="" method="post" id="formulario1" class="enmarcar">
            
            <legend>Registro </legend>

            <div class="mb-3">

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
            
            </div>

            <div class="mb-3">

                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3">

                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña">
                
            </div>

            <div class="mb-3">

                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono">

            </div>

            <div class="mb-3">

                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" >

            </div>

            <div class="mb-3">

                <label for="codigoPostal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigoPostal" >

            </div>

            <div class="mb-3 form-check">

                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Aceptas la política de privacidad</label>

            </div>

            <button type="submit" class="btn btn-primary" value="registrarse" onclick="validarRegistro()">Registrarse</button>  

        </form>

        <form action="" method="post" id="formulario2" class="enmarcar">

            <legend>Acceso </legend>

            <div class="mb-3">

                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3">

                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña">
                
            </div>

            <button type="submit" class="btn btn-primary" value="acceder" onclick="validarAcceso()">Acceder</button>


        </form>

    </div>

      <!-- Popper JS Bootstap -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <!-- Bootstap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="JS/formularioValidacion.js"></script>

</body>
</html>