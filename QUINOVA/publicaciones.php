<?php
include('db.php');

// Elimina la sesión si no quieres validarla
// session_start();

// Recuerda definir $idClase, por ejemplo desde GET, para que no falle
$idClase = isset($_GET['idclase']) ? intval($_GET['idclase']) : 0;

if ($idClase <= 0) {
    echo "<p>Clase inválida o no especificada.</p>";
    exit;
}

// Obtener datos de la clase
$result = $conn->query("SELECT * FROM clases WHERE idclases = $idClase");
if ($result && $result->num_rows > 0) {
    $rowClase = $result->fetch_assoc();
} else {
    echo "<p>Clase no encontrada.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Publicaciones</title>
    <style>
        /* Aquí puedes poner tus estilos si quieres */
        body { font-family: Arial, sans-serif; padding: 20px; background: #ead5ab; }
        a { text-decoration: none; color: #0b2c5d; }
        h2 { color: #0b2c5d; }
        form { margin-top: 20px; }
        label { font-weight: bold; }
        input[type="text"] { width: 100%; max-width: 400px; padding: 5px; margin-top: 5px; }
        input[type="submit"] { margin-top: 10px; padding: 8px 16px; background: #0b2c5d; color: #ead5ab; border: none; border-radius: 4px; cursor: pointer; }
        .publicacion { background: #0b2c5d; color: #ead5ab; padding: 15px; border-radius: 8px; margin-bottom: 10px; }
        .publicacion a { color: #ead5ab; margin-right: 10px; }
    </style>
</head>
<body>

  <a href="formCrearClase.php">Crear nuevo</a>

  <h2><?php echo htmlspecialchars($rowClase['nombre']); ?></h2>
  <h2><?php echo htmlspecialchars($rowClase['codigo']); ?></h2>

  <h3>Crear: Publicaciones</h3>
  <form method="post" action="crearPublicacion.php">
    <label>Contenido</label><br>
    <input name="contenido" type="text" required><br><br>
    <input name="idclase" type="hidden" value="<?php echo $idClase; ?>">
    <input type="submit" value="Crear">
  </form>

<?php
// Mostrar publicaciones
$resultado = $conn->query("SELECT * FROM publicaciones WHERE idclases = $idClase ORDER BY fechaC DESC");
if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $idp = $fila['id'];
        echo '<div class="publicacion">';
        echo '<p><b>' . htmlspecialchars($fila["nombre"]) . '</b></p>';
        echo '<p>' . htmlspecialchars($fila["codigo"]) . '</p>';
        echo '<p>' . htmlspecialchars($fila["fechaC"]) . '</p>';

        // Se puede controlar permisos si quieres (quitar o modificar esta parte si no usas)
        /*
        if (isset($_SESSION['rol']) && ($_SESSION['rol'] == 'Profesor' || $fila['nombre'] == $_SESSION['nombre'])) {
            echo '<a href="editarPublicacion.php?idp=' . $idp . '">Editar</a>';
            echo '<a href="eliminarPublicacion.php?idp=' . $idp . '">Eliminar</a>';
        }
        */
        
        echo '</div>';
    }
} else {
    echo '<p>No hay publicaciones aún.</p>';
}
?>

</body>
</html>
