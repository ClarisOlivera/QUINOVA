<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";


    $conn=new mysqli($servername, $username, $password, $dbname);


    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
session_start();
    $ci=$_POST['ci'];
    $contra=$_POST['contra'];


     
    $sql="SELECT * FROM cuenta WHERE user='$ci' AND contraseña='$contra';";

    $resultado= $conn->query($sql);
    if($resultado->num_rows>0){
        $fila = mysqli_fetch_assoc($resultado);
        $_SESSION['rol']=$fila['rol'];
        $_SESSION['ci']=$ci;
        $sql2 = "SELECT * FROM informacion WHERE ci = '".$ci."';";
        $resultado=$conn->query($sql2);
        if($resultado->num_rows>0){
            $filaEstudiante = mysqli_fetch_assoc($resultado);
            $_SESSION['nombreCompleto'] = $filaEstudiante['nombres']. " " . $filaEstudiante["apellidos"];
            echo $_SESSION['nombreCompleto'];
        }
        if($_SESSION['rol']=='estudiante'){
            header("Location: ../portadas/estudiante.php");
        exit();
        }
        if($_SESSION['rol']=='profesor'){
            header("Location: ../portadas/profesores.php");
        exit();
           
        }
    }else{
        echo"credenciales incorrectas";
    }




?>
