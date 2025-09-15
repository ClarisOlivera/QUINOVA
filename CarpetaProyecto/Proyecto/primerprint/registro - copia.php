<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="QUINOVA";

    $conn=new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
    $id=$_POST['i'];
    $nombre=$_POST['NombreCompleto'];
    $Fecha=$_POST['Fechadenacimiento'];
    $curso=$_POST['Curso'];
    $paralelo=$_POST['Paralelo'];
    $codigorude=$_POST['CodigoRude'];
    $carnetdeidentidad=$_POST['Carnetdeidentidad'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $rol=$_POST['rol'];
    $sql="INSERT INTO datos (id, NombreCompleto, Fechadenacimiento, Curso, Paralelo, Codigorude, Carnetdeidentidad, Telefono, Direccion, rol) VALUES ('$id','$nombre', '$Fecha', '$curso', '$paralelo', '$codigorude', '$carnetdeidentidad', '$telefono','$direccion','$rol')";
    if ($conn->query($sql)=== TRUE){
        echo "Ingreso a la pagina correctamente";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>