     <?php

    // checks and alerts
    // ...

// Actualizamos en funcion del id que recibimos

        $idObjetivo = $_POST['item2'];
        $mysqli = mysqli_connect("localhost","root","root", "test");
        $proyectos = "SELECT * FROM `proyectos` WHERE `proyectos`.`alineadoObj` = ".$idObjetivo;
        $total = mysql_num_rows($proyectos);
        error_log("Failed to connect to database! ".$total." ". $idObjetivo , 0);
        if ($total==0){
        	 $query = "DELETE FROM `objetivos` WHERE `objetivos`.`id`= ".$idObjetivo;
        	}
       
        
if (mysqli_query($mysqli, $query)== FALSE)   {
     echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
//header('Location: objetivos.php');
//exit;
?>