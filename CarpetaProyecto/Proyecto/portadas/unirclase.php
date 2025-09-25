<?php
include('../../db.php');

// Obtener el ID de la clase desde la URL
session_start();
// $idClase = isset($_GET['id']) ? intval($_GET['id']) : 0;
$codigoClase = $_GET['codigoclass'];
$ci = $_SESSION['ci'];

$nombre=$_SESSION['nombreCompleto'];

// select
$consulta = "SELECT id FROM clases where codigo = '".$codigoClase."';";
$resultado = mysqli_query($conn,$consulta);
echo $consulta;
if(!empty($resultado) && mysqli_num_rows($resultado) > 0){
    $id = mysqli_fetch_assoc(($resultado));
    $valorId = $id['id'];
    $insert = "INSERT INTO registroclase (cuenta_User, clases_id) VALUES (". $ci .", ". $valorId. ");";
    
    if ($conn->query($insert)=== TRUE){
        header("location:../portadas/materia.php?codigo=$codigoClase");
        exit();
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}


?>