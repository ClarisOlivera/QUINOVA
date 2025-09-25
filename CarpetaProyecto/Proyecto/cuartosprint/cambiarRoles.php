<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$ci = $_GET['ci'];
$consulta = "SELECT * FROM cuenta WHERE User = $ci;";
$resultado = mysqli_query($conexion, $consulta);
if(mysqli_num_rows($resultado) > 0){
    $fila = mysqli_fetch_assoc($resultado);
    $rol = $fila['rol'];
    if($rol == 'estudiante'){
        $consulta = "UPDATE cuenta SET rol = 'profesor' WHERE User = $ci;";
    }else if($rol == 'profesor'){
        $consulta = "UPDATE cuenta SET rol = 'estudiante' WHERE User = $ci;";
    }
    $resultado = mysqli_query($conexion, $consulta);
    header("Location: ../segundosprintbd/mostrar.php");
}else{
    echo "Error " . $conexion->error;
}
?>