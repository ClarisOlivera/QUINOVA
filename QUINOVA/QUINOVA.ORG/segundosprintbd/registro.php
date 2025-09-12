<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";

    $conn=new mysqli("localhost", $username, $password, $dbname);

    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $direccion=$_POST['direccion'];
    $fecha=$_POST['fechadenacimiento'];
    $telefono=$_POST['telefono'];
    $curso=$_POST['curso'];
    $ci=$_POST['ci'];
    $rude=$_POST['rude'];
    $rol=$_POST['rol'];
    $contra=$_POST['contra'];

    $sql1="INSERT INTO informacion (nombres, apellidos, direccion, fechadenacimiento, telefono, curso, ci, rude,cuenta_User) VALUES ('$nombres', '$apellidos', '$direccion', '$fecha', '$telefono', '$curso', '$ci','$rude','$ci')";    
    $sql2="INSERT INTO cuenta (user, rol, contraseña) VALUES ('$ci','$rol','$contra')";
    echo $sql1;
    if ($conn->query($sql2)=== TRUE){
        if ($conn->query($sql1)=== TRUE){
        session_start();
        $_SESSION['ci']=$ci;
        $_SESSION['rol']=$rol;
        echo $_SESSION['rol'];
        if($_SESSION['rol']=='estudiante'){
            header("location:../portadas/estudiante.php");
            exit();
        }else
        if($_SESSION['rol']=='profesor'){
            header("location:../portadas/profesores.php");
            exit();
        }
    }
    }else{
        echo "Error:" . $sql2 . "<br>" . $conn->error;
    }
    $conn->close();
?>