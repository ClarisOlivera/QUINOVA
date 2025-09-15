<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";

    session_start();
    $conn=mysqli_connect("localhost", $username, $password, $dbname);
    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }

    $fechaC=date("Y-m-d H:i:s");
    $fechaE=date("Y-m-d H:i:s");

    $sql="INSERT INTO publicaciones (contenido, fechaC, fechaE, nombre, clases_id)
     VALUES ('". $_POST["contenido"] . "', '$fechaC', '$fechaE', '".$_SESSION['nombreCompleto']."', ".$_SESSION['idClase'].")";

    echo $sql;
    if ($conn->query($sql)=== TRUE){
        if($_SESSION['rol']=='estudiante'){
            header("location:./portadas/materia.php?codigo=".$_SESSION['codigoClase']);
            exit();
        }else
        if($_SESSION['rol']=='profesor'){
            header("location:./portadas/materiaDocente.php?codigo=".$_SESSION['codigoClase']);
            exit();
        }
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>