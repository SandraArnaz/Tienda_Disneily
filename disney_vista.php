<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda DisneyForme - Pagina Disney</title>

    <!-- Bootstap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    
    <!-- Navegabilidad -->
    <header class="header-style-1">

        <?php include('comun/top_header.php');?>
        <?php include('comun/nav_header.php');?>

    </header>

    <?php 

    include "conexion.php";
    function getListaUsuarios() {
		
    $BD = crearConexion();
    $sql = "SELECT * FROM productos WHERE idProducto = 1";
    $resultado = mysqli_query($BD,$sql);

    //Si la consulta devuelve algun valor los devolvemos
    if (mysqli_num_rows($resultado) > 0) {
        return $resultado;
    } else {
        echo "No hay nada en la lista de usuarios";
    }

    cerrarConexion($BD);
    }
	

	function pintaTablaUsuarios(){
		
		$datos = getListaUsuarios();

		//Si hemos recibido el mensaje de error lo imprimimos 
		if(is_string($datos)) {
			echo $datos;
		} else {

			//Construimos tabla
			echo "<table>\n
					<tr>
						<td>Nombre</td>
						<td>Imagen</td>
                        <td>Descripción</td>
					</tr>\n";

			while ($fila = mysqli_fetch_assoc($datos)) {
				
					echo "<tr>\n
							<td>" . $fila["nombreProducto"] . "</td>
							<td> <img src='". $fila["imagen"] ."' alt=''>  </td>
                            <td>". $fila["descripción"] ." </td>
							  
						</tr>";
				
			}

			echo "</table>";
            

		}
		
	} 

    pintaTablaUsuarios();
    
    ?>

 


      <!-- Popper JS Bootstap -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <!-- Bootstap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>