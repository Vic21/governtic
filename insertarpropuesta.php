        <?php
    // checks and alerts
    // ...

// Actualizamos en funcion del id que recibimos

        $titulo = $_POST['titulo'];
        $capitalInicial = $_POST['capitalInicial'];

        $mysqli = mysqli_connect("localhost","root","root", "test");
        $query = "INSERT INTO `propuestas` (`id`, `titulo`, `fechaAlta`, `fechaBaja` , `capitalInicial` , `capitalAsignado` , `estado`) VALUES (NULL, ";

        $query .= "'";  
        $query .= $titulo;
        $query .= "'";  
        $query .= ", ";

        $query .= "'";  
        $query .= "CURDATE()";
        $query .= "'";  
        $query .= ", ";

        $query .= "'";  
        $query .= NULL;
        $query .= "'";  
        $query .= ", ";

        $query .= "'";  
        $query .= $capitalInicial;
        $query .= "'";  
        $query .= ", ";

        $query .= "'";  
        $query .= "0";
        $query .= "'";  
        $query .= ", ";

        $query .= "'";  
        $query .= "abierta";
        $query .= "'";  
        $query .= " )";

if (mysqli_query($mysqli, $query)== FALSE)   {
     echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
}
mysqli_close($mysqli);

header('Location: propuestas.php'); 
  exit();

?>