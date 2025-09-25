<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";


    $conn=new mysqli($servername, $username, $password, $dbname);

    session_start();

    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
    $ci=$_POST['ci'];
    $contra=$_POST['contra'];   
     
    $sql="SELECT * FROM cuenta WHERE user='$ci' AND contraseña='$contra';";

    $resultado= $conn->query($sql);
    if($resultado->num_rows>0){
        $fila = mysqli_fetch_assoc($resultado);
        $_SESSION['rol']=$fila['rol'];
        $_SESSION['ci']=$ci;
        $bloqueado = $fila['bloqueado'];
        $sql2 = "SELECT * FROM informacion WHERE ci = '".$ci."';";
        $resultado=$conn->query($sql2);
        if($resultado->num_rows>0){
            $filaEstudiante = mysqli_fetch_assoc($resultado);
            $_SESSION['nombreCompleto'] = $filaEstudiante['nombres']. " " . $filaEstudiante["apellidos"];
            // echo $_SESSION['nombreCompleto'];
            
            if($bloqueado == '1'){
                header("Location: ../cuartosprint/errorInicioSesion.php");
                exit();
            }
        }
        
        if($_SESSION['rol']=='estudiante'){
            header("Location: ../portadas/estudiante.php");
        exit();
        }
        if($_SESSION['rol']=='profesor'){
            header("Location: ../portadas/profesores.php");
        exit();
           
        }
        if($_SESSION['rol']=='administrador'){
            header("Location: ../portadas/administrador.php");
        exit();
           
        }
    }else{
        echo"credenciales incorrectas";
        echo "<br>";
        echo "<a href='primerform.php'>Volver atras</a>";
    }




?>
