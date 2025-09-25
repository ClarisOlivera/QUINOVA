<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "segundosprint");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $fechaEntrega = date('Y-m-d H:i:s');
    $idEstudiante = $_SESSION['ci'];
    $idTarea = $_POST['id_tarea'];
    $insertSql = "INSERT INTO entregas (cuenta_User, tareas_idtareas, fechaEntrega) VALUES ('". $_SESSION['ci'] ."', ". $_POST['id_tarea'] .", '$fechaEntrega')";
    if (mysqli_query($conexion, $insertSql)) {
         // Define a que carpeta irá el archivo
    $target_dir = "../tareas/";
    // recuperar el tipo de archivo (extension)

    $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
    // Define el nombre del archivo P-[id del estudiante]-[id de la tarea]
    $newFileName = "P-{$idEstudiante}-{$idTarea}.{$imageFileType}";
    // ruta completa de carpeta+nombre donde se guardará el archivo
    $target_file = "{$target_dir}{$newFileName}";
    // variable que funcionara como "bandera" si el valor es 1 se puede subir, si es 0 algo pasó
    $uploadOk = 1;

    // Verificar si el archivo existe
    if (file_exists($target_file)) {
        echo "Lo sentimos, ya subiste este archivo.";
        $uploadOk = 0;
    }

    // Valida tamaño
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Lo sentimos, tu archivo es muy grande.";
        $uploadOk = 0;
    }

    // subir archivo
    if ($uploadOk == 0) {
        echo "Ocurrió algun error.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se subió.";
        } else {
            echo "No se pudo subir tu archivo.";
        }
    }
    echo $target_dir;
    header("Location: ../portadas/tareas.php?codigo=" . $_SESSION['codigoClase']);
    exit();
    }else{
        echo "Error al entregar la tarea: " . mysqli_error($conexion);
    }
?>