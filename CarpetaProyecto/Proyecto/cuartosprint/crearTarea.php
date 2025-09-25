<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$tema = $_POST['tema'];
$nota = $_POST['nota'];

$insertarTarea = "INSERT INTO tareas (titulo, descripcion, tema, nota, clases_id) VALUES ('$titulo', '$descripcion', '$tema', '$nota', " . $_SESSION['idClase'] . ")";

if (mysqli_query($conexion, $insertarTarea)) {
    header("Location: ../portadas/tareasDocente.php?codigo=" . $_SESSION['codigoClase']);
    exit();
} else {
    echo "Error: " . $insertarTarea . "<br>" . mysqli_error($conexion);
    echo "<a href='../portadas/materiaDocente.php?codigo=" . $_SESSION['codigoClase'] . "'>Volver</a>";
}

?>
