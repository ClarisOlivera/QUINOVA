<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";

    $conn=new mysqli("localhost", $username, $password, $dbname);
    session_start();
    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }

    $nid=$_POST['id'];
    $contenido=$_POST['codigo'];
    $fechaC=$_POST['nombre'];
    $fechaE=$_POST['cuenta_User'];
    $nombre=$_POST['tareas_idtareas'];
    $clases_id=$_POST['clases_id'];
    

    $sql="INSERT INTO clases (id, codigo, nombre, cuenta_User, tareas_idtareas)
     VALUES ('$id', '$codigo', '$nombre', '$cuenta_User', '$tareas_idtareas')";    

    echo $sql;
    if ($conn->query($sql)=== TRUE){
        if($_SESSION['rol']=='estudiante'){
            header("location:../portadas/estudiante.php");
            exit();
        }else
        if($_SESSION['rol']=='profesor'){
            header("location:../portadas/profesores.php");
            exit();
        }
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>