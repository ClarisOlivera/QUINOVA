<?php
session_start();

    $conexion = mysqli_connect("localhost", "root", "", "segundosprint");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="entregarTarea.php" method="POST"  enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="" required>
        <input type="hidden" name="id_tarea" value="<?php echo $_GET['id']; ?>">
        <button type="submit">Entregar Tarea</button>
    </form>
</body>
</html>