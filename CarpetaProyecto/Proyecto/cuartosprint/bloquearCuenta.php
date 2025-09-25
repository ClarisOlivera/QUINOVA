<?php
session_start();
$conexion = new mysqli("localhost", "root", "", "segundosprint");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$ci = $_GET['ci'];
$sql = "UPDATE cuenta SET bloqueado = 1 WHERE user = '$ci'";
if ($conexion->query($sql) === TRUE) {
    echo "Cuenta bloqueada exitosamente.";
} else {
    echo "Error al bloquear la cuenta: " . $conexion->error;
}
header("Location: ../segundosprintbd/mostrar.php");
?>