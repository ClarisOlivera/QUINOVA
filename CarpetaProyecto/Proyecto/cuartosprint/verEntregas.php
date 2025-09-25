<?php
session_start();
$idTarea = $_GET['id'];
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$consulta = "SELECT * FROM entregas WHERE tareas_idtareas = $idTarea";
$resultado = mysqli_query($conexion, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .entrega {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Entregas de la tarea <?php echo $idTarea; ?></h1>
    <?php
    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $consultaEstudiante = "select * from informacion, entregas WHERE informacion.ci = entregas.cuenta_User and entregas.cuenta_User = ". $fila['cuenta_User'];
            $resultadoEstudiante = mysqli_query($conexion, $consultaEstudiante);
            $filaEstudiante = mysqli_fetch_assoc($resultadoEstudiante);
            echo "<div class='entrega'>";
            // nombre del posible archivo
            $nombreArchivo="P-".$fila['cuenta_User']."-".$fila['tareas_idtareas'];
            
            $directorio = "../tareas/";
            // lista de todas las extensiones posibles
            $extensiones = ["pdf", "jpg", "jpeg", "png", "gif", "webp", "docx", "xlsx", "txt", "zip"];
            // bandera para verificar todo tipo de archivo
            $archivoEncontrado = null;
            // verificar si el archivo se creó en alguna extensión conocida
            foreach ($extensiones as $ext) {
                // nombre del archivo con cada extensión
                $ruta = $directorio . $nombreArchivo . "." . $ext;
                
                // verifica
                
                if (file_exists($ruta)) {
                    $archivoEncontrado = $ruta;
                    // detenemos la búsqueda en cuanto lo encuentra

                    break;
                }
            }

            // verifica si encontró algún archivo con el nombre
            if ($archivoEncontrado) {

                $extension = strtolower(pathinfo($archivoEncontrado, PATHINFO_EXTENSION));
                // Mostrar según el tipo
                if (in_array($extension, ["jpg", "jpeg", "png", "gif", "webp"])) {
                    echo "<img src='$archivoEncontrado' alt='Archivo' width='250'>";
                } elseif ($extension === "pdf") {
                    echo "<embed src='$archivoEncontrado' type='application/pdf' width='400' height='250'>";
                } else {
                    echo "<a href='$archivoEncontrado' download>📁 Descargar archivo</a>";
                }
            }
            

            
            echo "<p>Fecha de Entrega: " . $fila['fechaEntrega'] . "</p>";
            echo "<p>Nombre Completo: " . $filaEstudiante['nombres'] . " " . $filaEstudiante['apellidos']. "</p>";
            echo "<p>Nota:</p>";
            if($fila['nota'] !== null){
                echo "<p>" . $fila['nota'] . "</p>";
            } else {
                echo "<p>No calificado</p>";
            }
            echo "<form action='calificarEntrega.php' method='POST'>";
            echo "<input cuenta_User type='hidden' name='cuenta_User' value='" . $fila['cuenta_User'] . "'>";
            echo "<input tareas_idtareas type='hidden' name='tareas_idtareas' value='" . $fila['tareas_idtareas'] . "'>";
            echo "<input type='number' name='nota' placeholder='Asignar nota' min='0' max='100' required>";
            echo "<button type='submit'>Asignar/Editar Nota</button>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>No hay entregas para esta tarea.</p>";
    }
    ?>
    </div>
</body>
</html>