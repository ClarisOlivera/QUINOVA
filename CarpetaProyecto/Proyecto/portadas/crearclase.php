<?php
include('../../db.php');
session_start();

if (!isset($_SESSION['ci'])) {
    die("Error: Sesión no iniciada.");
}

    $nombreClase = $_POST['Nombre'];
    $codigo = $_POST['Seccio'];
    $cuenta = $_SESSION['ci'];

    echo $nombreClase;
    // Verifica que no exista ya una clase con ese código
    $consultaVerificada = "SELECT * FROM clases WHERE codigo = '$codigo'";
    $resultadoVerificado = mysqli_query($conn, $consultaVerificada);

    if (mysqli_num_rows($resultadoVerificado) == 0) {
        $sql = "INSERT INTO clases (codigo, nombre, cuenta_User)  
                VALUES ('$codigo', '$nombreClase', '$cuenta')";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            header("Location: ./materiaDocente.php?codigo=" . $codigo);
            exit();
        } else {
            echo "Error al insertar: " . $conn->error;
        }
    }else{
        header("Location: /QUINOVA.ORGmio/QUINOVA.ORG/portadas/crear.php");
    }

?>