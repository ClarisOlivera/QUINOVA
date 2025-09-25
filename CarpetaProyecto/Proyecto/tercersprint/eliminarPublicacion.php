<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "segundosprint");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $consultaDelete = "DELETE FROM publicaciones WHERE id = ".$_GET['id']. ";";
    $resultado = mysqli_query($conexion, $consultaDelete);
    if($resultado){
        header("location:../portadas/materiaDocente.php?codigo=".$_SESSION['codigoClase']);
    }else{
        echo "Error al eliminar la publicacion: " . mysqli_error($conexion);
    }

?>