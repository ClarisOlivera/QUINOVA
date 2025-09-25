<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "segundosprint");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    $_SESSION['idTarea'] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar la entrega</h1>
    <form action="editarEntrega.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="" required>
        <input type="hidden" name="id_entrega" value="<?php echo $_GET['id']; ?>">
        <button type="submit">Editar Entrega</button>
    </form>
</body>
</html>