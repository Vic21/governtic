<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro eliminado.</title>
<META name='robot' content='noindex, nofollow'>
</head>

<body>

<?php

// Actualizamos en funcion del id que recibimos

		$id = $_POST['id'];

 		$mysqli = mysqli_connect("localhost","root","root", "test");
		$query = "DELETE * FROM $objetivos where id = '$id'"; 
		$result = mysql_query($query);   

echo "
<p>El objetivo ha sido eliminado con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";

?>



</body>

</html> 