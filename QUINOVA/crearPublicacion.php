<?php
  include('db.php');
  session_start();
  $nombre=$_SESSION['nombres'];
  $contenido=$_POST['contenido'];
  $idClase = $_POST['idclase'];
  date_default_timezone_set('America/La Paz');
  $fecha=date("Y-m-d H:i:s");

        $sql="INSERT INTO publicaciones (contenido, fechaC, nombre, idclase) 
    VALUES ('$contenido', '$fecha', '$nombre', '$idClase')";   
         if ($conn->query($sql) === TRUE) {
        header("Location: materia.php?id=$idClase");
    }
?>