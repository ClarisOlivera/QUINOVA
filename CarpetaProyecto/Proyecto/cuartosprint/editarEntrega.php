<?php
session_start();
echo $_SESSION['idTarea'];
$conexion = mysqli_connect("localhost", "root", "", "segundosprint");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$fechaEntrega = date('Y-m-d H:i:s');
$idEstudiante = $_SESSION['ci'];
$sqlUpdate = "UPDATE entregas SET fechaEntrega = '$fechaEntrega' WHERE cuenta_User = $idEstudiante AND tareas_idtareas = ".$_SESSION['idTarea'];
echo $sqlUpdate;
$resultado = mysqli_query($conexion, $sqlUpdate);
if($resultado){
    // borrar el archivo creado en /tareas
    $target_dir = "../tareas/";
    $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

    $newFileName = "P-{$idEstudiante}-{$_SESSION['idTarea']}.{$imageFileType}";
    $target_file = "{$target_dir}{$newFileName}";
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    // subir el nuevo archivo
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file
)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se subió.";
    } else {
        echo "No se pudo subir tu archivo.";
    }



    header("Location: ../portadas/tareas.php?codigo=" . $_SESSION['codigoClase']);
    exit();
}else{
    echo "Error al actualizar la tarea: " . mysqli_error($conexion);
}

?>