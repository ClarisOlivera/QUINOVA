<?php
$nombreServidor="localhost";
$usuario="root";
$contraseña="";
$basededatos="QUINOVA";

$conexion=new mysqli($nombreServidor,$usuario,$contraseña,$basededatos);

if($conexion->connect_error ){
    echo "Hubo un error :(";
}

    $id=$_POST['id'];
    $nombre=$_POST['NombreCompleto'];
    $Fecha=$_POST['Fechadenacimiento'];
    $curso=$_POST['Curso'];
    $paralelo=$_POST['Paralelo'];
    $codigorude=$_POST['CodigoRude'];
    $carnetdeidentidad=$_POST['Carnetdeidentidad'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $rol=$_POST['rol'];

$sql="UPDATE datos SET NombreCompleto='$nombre',Fechadenacimiento='$Fecha',Curso='$curso',Paralelo='$paralelo',Codigorude='$codigorude',Carnetdeidentidad='$carnetdeidentidad',telefono='$telefono',direccion='$direccion ,rol='$rol' WHERE id=$id";
if($conexion->query($sql) === TRUE){
    echo "El producto se editó exitosamente :)";
}
?>