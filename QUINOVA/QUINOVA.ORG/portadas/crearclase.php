<?php
include('../../db.php'); // Asegúrate que la ruta sea correcta
session_start();

if (!isset($_SESSION['ci'])) {      //
    die("Error: Sesión no iniciada.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aula = $_POST['Aul'] ?? '';
    $codigo = $_POST['Seccio'] ?? '';
    $nom = $_POST['Nombre'] ?? '';
    $cuenta = $_SESSION['ci'];
}
$consultaVerificada = "SELECT * FROM clases WHERE codigo = ".$codigo.";";
$resultadoVerificado = mysqli_query($conn, $consultaVerificada);
if(mysqli_num_rows($resultadoVerificado) == 0){
    $sql = "INSERT INTO clases (codigo, Nombre, cuenta_User) 
            VALUES ('$codigo', '$nom', '$cuenta')";
    //$sql="SELECT * FROM clases WHERE cuenta_User='$cuenta'";
        if($conn->query($sql)===true){
            header("Location: /QUINOVA.ORGmio/QUINOVA.ORG/portadas/materiaDocente.php?id=$conn->insert_id");
            exit();
        }else{
        echo $conn->error;
        }
}else{
    header("Location: /QUINOVA.ORGmio/QUINOVA.ORG/portadas/crear.php");
}

?>
