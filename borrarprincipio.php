     <?php
 if(isset($_POST['item2']))
{

    // checks and alerts
    // ...

// Actualizamos en funcion del id que recibimos

        $idPrincipio = $_POST['item2'];
        $mysqli = mysqli_connect("localhost","root","root", "test");
        $query = "DELETE FROM `principios` WHERE `principios`.`id`=".$idPrincipio;

if (mysqli_query($mysqli, $query)== FALSE)   {
     echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
header('Location: principios.php');
exit;
?>