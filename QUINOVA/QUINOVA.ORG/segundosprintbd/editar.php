<?php
$nombreServidor="localhost";
$usuario="root";
$contraseña="";
$basededatos="segundosprint";

$conexion=new mysqli($nombreServidor,$usuario,$contraseña,$basededatos);

if($conexion->connect_error ){
    echo "Hubo un error :(";
}

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fechadenacimiento'];
$telefono=$_POST['telefono'];
$curso=$_POST['curso'];
$ci=$_POST['ci'];



$sql1="UPDATE informacion SET nombres='$nombres', apellidos='$apellidos',direccion='$direccion' ,fechadenacimiento='$fecha' ,telefono='$telefono',Curso='$curso' WHERE ci='$ci'";
if($conexion->query($sql1) === TRUE){
    echo "Se edito exactamente :)";

}
?>