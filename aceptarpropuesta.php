

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['item2']))
{

    // checks and alerts
    // ...

	// Actualizamos en funcion del id que recibimos

	$idPropuesta = $_POST['item2'];
	$mysqli = mysqli_connect("localhost","root","root", "test");

	$query = "UPDATE `propuestas` SET `estado` = 'aceptada' WHERE `propuestas`.`id` = ".$idPropuesta.";";
	$query.= "SELECT * FROM `propuestas` WHERE `propuestas`.`id` = ".$idPropuesta.";";

	//        INSERT INTO `proyectos` (`id`, `nombre`, `prioridad`, `descripcion` , `fechaInicio` , `costeInicial` , `presupuestoAsignado` ,`idMetrica1`, `idMetrica2` , `alineadoObj` , `idObjetivo` , `estado`)
	//        INSERT INTO "proyectos" ("column1", "column2", ...)
	//SELECT "column3", "column4", ...
	//FROM "table2"

	if (mysqli_query($mysqli, $query)== FALSE)   {
		echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
	}

	$querySelect = "SELECT * FROM `propuestas` WHERE `propuestas`.`id` = ".$idPropuesta;
	$result = $mysqli->query($querySelect);

	$res->$result->fetch_row();

	$nombre = $res[1];
	$prioridad = $res[2];
	$descripcion = $res[3];
	$fecha = $res[7];
	$capitalInicial = $res[9];
	$objetivo = $res[10];

	$queryInsert = "INSERT INTO `proyectos` (`id`, `nombre`, `prioridad`, `descripcion` , `fechaInicio` , `costeInicial` , `presupuestoAsignado` ,`idMetrica1`, `idMetrica2` , `alineadoObj` , `idObjetivo` , `estado`) VALUES (NULL, ";

	$queryInsert .= "'";
	$queryInsert .= $nombre;
	$queryInsert .= "'";
	$queryInsert .= ", ";

	$queryInsert .= "'";
	$queryInsert .= $prioridad;
	$queryInsert .= "'";
	$queryInsert .= ", ";

	$queryInsert .= "'";
	$queryInsert .= $descripcion;
	$queryInsert .= "'";
	$queryInsert .= ", ";

	$queryInsert .= "'";
	$queryInsert .= $fecha;
	$queryInsert .= "'";
	$queryInsert .= ", ";

	$queryInsert .= "'";
	$queryInsert .= $capitalInicial;
	$queryInsert .= "'";
	$queryInsert .= ", ";

	$queryInsert .= "'0'";
	$queryInsert .= ", ";

	$queryInsert .= "'0'";
	$queryInsert .= ", ";

	$queryInsert .= "'0'";
	$queryInsert .= ", ";

	$queryInsert .= "'";
	$queryInsert .= $objetivo;
	$queryInsert .= "'";
	$queryInsert .= ", ";

	$queryInsert .= "'";
	$queryInsert .= "activo";
	$queryInsert .= "'";
	$queryInsert .= " )";

	if (mysqli_query($mysqli, $queryInsert)== FALSE)   {
		echo "Error: " . $queryInsert . "<br>" . mysqli_error($mysqli);
	}
	mysqli_close($mysqli);
}
header('Location: propuestas.php');
exit;
