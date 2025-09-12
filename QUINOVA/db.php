<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
?>
<!-- es el que hace toda la conexion a la base de datos-->