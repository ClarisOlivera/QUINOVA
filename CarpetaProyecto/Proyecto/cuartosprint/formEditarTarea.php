<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$consultaTarea = "SELECT * FROM tareas WHERE idtareas = " . $_GET['id'] . " AND clases_id = " . $_SESSION['idClase'];

$resultado = mysqli_query($conexion, $consultaTarea);
if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    
} else {
    echo "No se encontró la tarea o no tienes permiso para editarla.";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

 
        div {
            top: 15vh;
            position: relative;
        }
 
        a {
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            color: #000000ff;
            text-align: left;
            bottom: 10px;
        }
 
        input, textarea {
            display: block;
            margin-bottom: 10px;
            width: 300px;
            padding: 8px;
            font-size: 16px;
        }
 
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
 
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./editarTarea.php" method="post">
        <input type="hidden" name="idtareas" value="<?php echo $fila['idtareas']; ?>">
        Titulo:
        <input type="text" name="titulo" id="titulo" placeholder="Título de la tarea" value="<?php echo htmlspecialchars($fila['titulo']); ?>">
        Descripcion:
        <textarea name="descripcion" id="descripcion" placeholder="Descripción de la tarea"><?php echo htmlspecialchars($fila['descripcion']); ?></textarea>
        Tema:
        <input type="text" name="tema" placeholder="Tema de la tarea" value="<?php echo htmlspecialchars($fila['tema']); ?>">
        Nota:
        <input type="text" name="nota" placeholder="Nota de la tarea" value="<?php echo htmlspecialchars($fila['nota']); ?>">
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>