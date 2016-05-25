     <?php
 if(isset($_POST['item2']))
{

    // checks and alerts
    // ...

// Actualizamos en funcion del id que recibimos

        $idObjetivo = $_POST['item2'];
        $mysqli = mysqli_connect("localhost","root","root", "test");
        $query = "DELETE FROM `objetivos` WHERE `objetivos`.`id`=".$idObjetivo;
        
if (mysqli_query($mysqli, $query)== FALSE)   {
     echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
}
header('Location: objetivos.php');
exit;
?>