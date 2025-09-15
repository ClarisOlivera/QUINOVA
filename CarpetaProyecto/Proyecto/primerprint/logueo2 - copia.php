<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbname="QUINOVA";


    $conn=new mysqli($servername, $username, $password, $dbname);


    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
session_start();
    $codigorude=$_POST['CodigoRude'];
    $contra=$_POST['contra'];


     
    $sql="SELECT * FROM datos WHERE Codigorude='$codigorude' AND Carnetdeidentidad='$contra'";
    $resultado= $conn->query($sql);
    if($resultado->num_rows>0){
    while ($fila=$resultado->fetch_assoc () ){
        $_SESSION['NombreCompleto']=$fila['NombreCompleto'];
        $_SESSION['CodigoRude']=$fila['Codigorude'];
        $_SESSION['rol']=$fila['rol'];
        echo $fila['rol'];
        if($_SESSION['rol']=='estudiante'){
            header("Location: portadaestudiante.php");
        exit();
        }
        if($_SESSION['rol']=='profesor'){
            header("Location: portadaprofesor.php");
        exit();
           
        }
    }
    }else{
        echo"credenciales incorrectas";
    }




?>
