<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$sql = "SELECT * FROM clases WHERE codigo = '" . $_GET['codigo'] . "'";
$resultado = mysqli_query($conexion, $sql);
if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['idClase'] = $fila['id'];
    $_SESSION['codigoClase'] = $fila['codigo'];
} else {
    echo "No se encontró la clase.";
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div {
            top: 15vh;

        }
 
        
        .contenedor{
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 80%;
            max-width: 600px;
            background-color: #f9f9f9;
        }
       
        .tarea {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
 
        .tarea h2 {
            margin: 0 0 10px 0;
        }
 
        .tarea p {
            margin: 5px 0;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Tareas de la clase: <?php echo $fila['nombre']; ?></h1>
        <a href="../portadas/materia.php?codigo=<?php echo $_SESSION['codigoClase']; ?>" >Volver atras</a>

        <div class="contenedor">
        
            <?php
        $sqlTareas = "SELECT * FROM tareas WHERE clases_id = '$_SESSION[idClase]' ORDER BY idtareas DESC;";
        $resultadoTareas = $conexion->query($sqlTareas);
        if (mysqli_num_rows($resultadoTareas) > 0) {
            while ($filaTarea = $resultadoTareas->fetch_assoc()) {
                echo "<div class='tarea'>";
                echo "<h2>" . $filaTarea['titulo'] . "</h2>";
                echo "<p>" .$filaTarea['descripcion'] . "</p>";
                echo "<p>Tema: " . $filaTarea['tema'] . "</p>";
                echo "<p>Nota: " . $filaTarea['nota'] . "</p>";
                $consultaEntrega = "SELECT * FROM entregas WHERE tareas_idtareas = " . $filaTarea['idtareas'] . " AND cuenta_User = $_SESSION[ci]";
                $resultadoEntrega = mysqli_query($conexion, $consultaEntrega);
                if(mysqli_num_rows($resultadoEntrega) > 0){
                    echo "<p style='color: green; font-weight: bold;'>Tarea entregada</p>";
                    echo "<a href='../cuartosprint/formEditarEntrega.php?id=" . $filaTarea['idtareas'] . "'>Editar entrega</a>";
                } else {
                    echo "<p style='color: red; font-weight: bold;'>Tarea no entregada</p>";
                    echo "<a href='../cuartosprint/formEntregarTarea.php?id=" . $filaTarea['idtareas'] . "'>Entregar Tarea</a>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>No hay tareas disponibles.</p>";
        }
        mysqli_close($conexion);
        ?>
        </div>

    </div>
</body>
</html>