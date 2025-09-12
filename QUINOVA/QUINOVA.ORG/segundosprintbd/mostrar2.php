<?php
$nombreServidor="localhost";
$usuario="root";
$contraseña="";
$basededatos="QUINOVA";

$conexion= new mysqli($nombreServidor,$usuario,$contraseña,$basededatos);

if($conexion->connect_error){
    echo "Hubo un error :(";
}

$id=$_POST['id'];
$sql="SELECT * FROM informacion WHERE id=$id";
$sql="SELECT * FROM cuenta WHERE id=$id";

$resultado= $conexion->query($sql);
if($resultado->num_rows > 0){
    while($fila=$resultado->fetch_assoc()){
        echo $fila['i']." ".$fila['nombres']." ".$fila['apellidos']." ".$fila['direccion']." ".$fila['fechadenacimiento']." ".$fila['telefono']." ".$fila['Curso']." ".$fila['ci']." ".$fila['rude'];
        echo $fila['rol']." ".$fila['contraseña'];
        $id=$fila['i'];
    }
}
?>