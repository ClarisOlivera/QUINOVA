
<?php
include('../../db.php');
session_start();

if (!isset($_SESSION['ci'])) {
    die("Error: Sesión no iniciada.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aula = $_POST['Aul'] ?? '';
    $cuenta = $_SESSION['ci'];

    $sql = "INSERT INTO clases (codigo, Nombre, cuenta_User) 
            VALUES ('$codigo', '$nom', '$cuenta')";

    if ($conn->query($sql) === TRUE) {
        $idClase = $conn->insert_id;
        header("Location: /QUINOVA.ORGmio/QUINOVA.ORG/portadas/materia.php?id=$idClase");
        exit();
    } else {
        echo "Error al insertar clase: " . $conn->error;
    }
}
?>
            
