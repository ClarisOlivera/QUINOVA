<?php
session_start();
    include('../../db.php');
    $_SESSION['codigoClase'] = $_GET['codigo'];
    $consultaClase = "SELECT * FROM clases WHERE codigo = '".$_GET['codigo']."'";
    $resultadoClase = $conn->query($consultaClase);
    if ($resultadoClase->num_rows > 0) {
        $filaClase = $resultadoClase->fetch_assoc();
        $nombreClase = $filaClase['nombre'];
        $idClase = $filaClase['id'];
        $_SESSION['idClase'] = $idClase;
    }else{
        die("No se encontró la clase.");  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .contenedor {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1); 
        }
        .tarea {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <div>
        <h1>Tareas de la clase: <?php echo $nombreClase; ?></h1>
        <a href="../portadas/materiaDocente.php?codigo=<?php echo $_SESSION['codigoClase']; ?>" >Volver atras</a>
        <a href="../cuartosprint/formCrearTarea.php?codigo=<?php echo $_SESSION['codigoClase']; ?>">Crear nueva tarea</a>
        <div class="contenedor">
            
            <?php
        $sqlTareas = "SELECT * FROM tareas WHERE clases_id = '$_SESSION[idClase]' ORDER BY idtareas DESC;";
        $resultadoTareas = $conn->query($sqlTareas);
        if (mysqli_num_rows($resultadoTareas) > 0) {
            while ($filaTarea = $resultadoTareas->fetch_assoc()) {
                echo "<div class='tarea'>";
                echo "<h2>" . $filaTarea['titulo'] . "</h2>";
                echo "<p>" .$filaTarea['descripcion'] . "</p>";
                echo "<p>Tema: " . $filaTarea['tema'] . "</p>";
                echo "<p>Nota: " . $filaTarea['nota'] . "</p>";
                echo "<a href='../cuartosprint/formEditarTarea.php?id=" . $filaTarea['idtareas'] . "'>Editar</a> | ";
                echo "<a href='../cuartosprint/eliminarTarea.php?id=" . $filaTarea['idtareas'] . "'>Eliminar</a> | ";
                echo "<a href='../cuartosprint/verEntregas.php?id=" . $filaTarea['idtareas'] . "'>Ver entregas</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay tareas asignadas para esta clase.</p>";
        }
        ?>
        </div>
    </div>
</body>
</html>