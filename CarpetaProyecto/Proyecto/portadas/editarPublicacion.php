<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "segundosprint");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    $idPublicacion = $_GET['id'];
    $sql = "SELECT * FROM publicaciones WHERE id = $idPublicacion";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado || mysqli_num_rows($resultado) == 0) {
        die("Publicación no encontrada.");
    }
    $publicacion = mysqli_fetch_assoc($resultado);
    $_SESSION['idPublicacion'] = $publicacion['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Editar publicacion</h1>
        <form action="../tercersprint/terminareditadopublicacion.php" method="post">
            <label for="">Contenido</label>
            <input type="text" name="contenido" value="<?php echo $publicacion['contenido']; ?>"><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>