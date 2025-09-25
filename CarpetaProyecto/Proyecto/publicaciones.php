<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";

    session_start();
    $conn=mysqli_connect("localhost", $username, $password, $dbname);
    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
    $ci = $_SESSION['ci'];

    $fechaC=date("Y-m-d H:i:s");
    $fechaE=date("Y-m-d H:i:s");

    $sql="INSERT INTO publicaciones (contenido, fechaC, fechaE, nombre, clases_id)
     VALUES ('". $_POST["contenido"] . "', '$fechaC', '$fechaE', '".$_SESSION['nombreCompleto']."', ".$_SESSION['idClase'].")";

    $consultaPublicacion = "SELECT * from publicaciones WHERE nombre = '" . $_SESSION['nombreCompleto']. "' ORDER BY fechaC DESC;";
    $resultadoPublicacion = mysqli_query($conn, $consultaPublicacion);
    if(mysqli_num_rows($resultadoPublicacion) > 0){
        $filaPublicacion = mysqli_fetch_assoc($resultadoPublicacion);
    }else{
        exit();
    }
     
    $idPublicacion = $filaPublicacion['id'];
    $target_dir = "./publicaciones/";
    // recuperar el tipo de archivo (extension)

    $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
    // Define el nombre del archivo P-[id del estudiante]-[id de la tarea]
    $newFileName = "P-{$ci}-{$idPublicacion}.{$imageFileType}";
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
    


    if ($conn->query($sql)=== TRUE){
        if($_SESSION['rol']=='estudiante'){
            header("location:./portadas/materia.php?codigo=".$_SESSION['codigoClase']);
            exit();
        }else
        if($_SESSION['rol']=='profesor'){
            header("location:./portadas/materiaDocente.php?codigo=".$_SESSION['codigoClase']);
            exit();
        }
    }else{  
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>