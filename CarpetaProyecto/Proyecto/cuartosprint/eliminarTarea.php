<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$consultaDeleteEstudiantes = "DELETE FROM entregas WHERE tareas_idtareas = " . $_GET['id'];
$resultadoEstudiantes = mysqli_query($conexion, $consultaDeleteEstudiantes);

$consultaDelete = "DELETE FROM tareas WHERE idtareas = " . $_GET['id'] . ";";
$resultado = mysqli_query($conexion, $consultaDelete);
if ($resultadoEstudiantes && $resultado) {
    header("Location: ../portadas/tareasDocente.php?codigo=" . $_SESSION['codigoClase']);
    exit();
} else {
    echo "Error al eliminar la tarea: " . mysqli_error($conexion);
}

?>