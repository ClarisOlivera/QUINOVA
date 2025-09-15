<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "segundosprint");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    echo $_POST['contenido'];

    $updateSql = "UPDATE publicaciones SET contenido = '". $_POST['contenido'] ."', fechaE = NOW() WHERE id = ".$_SESSION['idPublicacion'];
    if (mysqli_query($conexion, $updateSql)) {
        if($_SESSION['rol']=='estudiante'){
            header("location:../portadas/materia.php?codigo=".$_SESSION['codigoClase']);
            exit();
        }else
        if($_SESSION['rol']=='profesor'){
            header("location:../portadas/materiaDocente.php?codigo=".$_SESSION['codigoClase']);
            exit();
        }
    } else {
        echo "Error al actualizar la publicación: " . mysqli_error($conexion);
    }


?>