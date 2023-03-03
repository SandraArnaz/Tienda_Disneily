<?php 

	function crearConexion() {
		// Cambiar en el caso en que se monte la base de datos en otro lugar
		$host = "localhost";
		$user = "root";
		$pass = "";
		$baseDatos = "tienda";

		//Establecemos la conexion con la base de datos
		$conexion = mysqli_connect($host, $user, $pass, $baseDatos);
		
		//Si sucede un error en la conexion, lo mostramos y lo detenemos
		 if (!$conexion->set_charset("utf8")) {
			die("<br>Error de conexion con la base de datos" . mysqli_connect_error());
		}
		
		return $conexion;
	}


	function cerrarConexion($conexion) {
		mysqli_close($conexion);
	}


?>