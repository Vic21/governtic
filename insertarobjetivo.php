<?php
		if(isset($_POST['id']))
{
    // checks and alerts
    // ...

// Actualizamos en funcion del id que recibimos

		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$idPrincipio = $_POST['principio'];

 		$mysqli = mysqli_connect("localhost","root","root", "test");
		$query = "INSERT INTO `objetivos` (`id`, `nombre`, `descripcion`, `idPrincipio`) VALUES (NULL, ";

		$query .= "'";	
		$query .= $nombre;
		$query .= "'";	
		$query .= ", ";	

		$query .= "'";	
		$query .= $descripcion;
		$query .= "'";	
		$query .= ", ";

		$query .= "'";	
		$query .= $idPrincipio;
		$query .= "'";	
		$query .= " )";

if (mysqli_query($mysqli, $query)) {
    
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
exit;
}
?>