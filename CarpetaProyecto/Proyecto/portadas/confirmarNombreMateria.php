<?php
    session_start();
    $nombreNuevo = $_POST['nombreNuevo'];
    echo $nombreNuevo;  
    $servername="localhost";
    $username="root";   
    $password="";
    $dbname="segundosprint";
    $conn= new mysqli("localhost", $username, $password, $dbname);
    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }

    $sql = "UPDATE clases SET nombre = '".$nombreNuevo."' WHERE codigo = ".$_POST['codigo'].";"; 
    $resultado = mysqli_query($conn, $sql);
    header('Location:  ./profesores.php')

?>