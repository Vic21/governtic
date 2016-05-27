     <?php
 if(isset($_POST['item2']))
{

    // checks and alerts
    // ...

// Actualizamos en funcion del id que recibimos

        $idPropuesta = $_POST['item2'];
        $mysqli = mysqli_connect("localhost","root","root", "test");
        $query = "UPDATE `propuestas` SET `fechaBaja` = CURDATE() , `estado` = 'rechazada' WHERE `propuestas`.`id` = ".$idPropuesta;

if (mysqli_query($mysqli, $query)== FALSE)   {
     echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
header('Location: propuestas.php');
exit;
?>