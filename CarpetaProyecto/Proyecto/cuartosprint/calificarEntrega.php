<?php
session_start();
$cuenta_User = $_POST['cuenta_User'];
$tareas_idtareas = $_POST['tareas_idtareas'];
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$nota = $_POST['nota'];
$updateSql = "UPDATE entregas SET nota = '$nota' WHERE cuenta_User = '$cuenta_User' AND tareas_idtareas = '$tareas_idtareas'";
$resultado = mysqli_query($conexion, $updateSql);
if($resultado){
    header("Location: ../cuartosprint/verEntregas.php?id=" . $tareas_idtareas);
    exit();
}else{
    echo "Error al calificar la entrega: " . mysqli_error($conexion);
}

?>