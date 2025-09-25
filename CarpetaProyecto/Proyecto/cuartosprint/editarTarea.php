<?php
session_start();
echo $_POST['idtareas'];
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$updateSql = "UPDATE tareas SET titulo = '". $_POST['titulo'] ."', descripcion = '". $_POST['descripcion'] ."', tema = '". $_POST['tema'] ."', nota = '". $_POST['nota'] ."' WHERE idtareas = ".$_POST['idtareas'];
echo $updateSql;
$resultado = mysqli_query($conexion, $updateSql);
if($resultado){
    header("Location: ../portadas/tareasDocente.php?codigo=" . $_SESSION['codigoClase']);
    exit();
}else{
    echo "Error al actualizar la tarea: " . mysqli_error($conexion);
}


?>