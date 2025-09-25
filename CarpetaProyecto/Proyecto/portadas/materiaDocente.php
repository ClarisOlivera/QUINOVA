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
    }

    $consultaDocente = "SELECT * FROM informacion WHERE ci = '".$_SESSION['ci']."'";
    $resultadoDocente = $conn->query($consultaDocente);
    if ($resultadoDocente->num_rows > 0) {
        $filaDocente = $resultadoDocente->fetch_assoc();   
        $nombreProfesor = $filaDocente['nombres'] . " " . $filaDocente['apellidos'];
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Portada Ajustada de Verdad</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 20px;
    }
    .contenedor {
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1); 
    }
    h1 {
      color: #222;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      margin: 10px 0;
    }
    .error {
      background-color: #eee;
      padding: 20px;
      border-left: 6px solid #adb446ff;
      color: #333;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #007bff;
    }
    a:hover {
      text-decoration: underline;
    }

    .boton {
      background-color: #0b2c5d;
      color: #ead5ab;
      display: flex;
      align-items: center;
      padding: 50px 40px; 
      border-radius: 12px;
      margin-top: 20px;
      font-size: 18px; 

    
      font-family: Georgia, 'Times New Roman', Times, serif;
 
    }

    .circulo {
      width: 30px;
      height: 30px;
      background-color: #ead5ab;
      border-radius: 50%;
      margin-right: 20px;
  
    }
  </style>
</head>
<body>

<div class="contenedor">
    
      <div class="error">
        <h1><?php echo $nombreClase; ?></h1>
        <p><strong>Código:</strong> <?php echo $_GET['codigo']; ?></p>
        <p><strong>Por docente:</strong> <?php echo $nombreProfesor ?> </p>
      </div>
    <a href="profesores.php">← Volver atras</a>
    <a href="http://"></a>
    
    <form action="megusta.php">
      <input type="Submit" value="Me Gusta">
    </form>
  </div>
    <div class="contenedor">
        <h2>Tareas de la clase</h2>
        <a href="tareasDocente.php?codigo=<?php echo $_SESSION['codigoClase']; ?>">Ver y asignar tareas</a>
    </div>
  <div class="contenedor">
    <h2>Publicaciones</h2>
    <?php
    $sqlPublicaciones = "SELECT * FROM publicaciones WHERE clases_id = '$_SESSION[idClase]
' ORDER BY fechaC DESC";

    $resultadoPublicaciones = $conn->query($sqlPublicaciones);
    if ($resultadoPublicaciones->num_rows > 0) {
        while ($filaPub = $resultadoPublicaciones->fetch_assoc()) {
            echo '<div class="boton">';
            echo '<div class="circulo"></div>';
            echo '<div>';
            echo '<p>' .($filaPub['contenido']) . '</p>';
            echo '<small>Publicado el ' . $filaPub['fechaE'] . '</small><br>';
            echo "<a href='../tercersprint/eliminarPublicacion.php?id=" . $filaPub['id'] . "'>Eliminar</a>";
            if($filaPub['nombre'] == $_SESSION['nombreCompleto']){    
              echo "<br>" . "<a href='editarPublicacion.php?id=" . $filaPub['id'] . "'>Editar</a>";
            }
              echo '</div>';
              echo '</div><br>';
            }
          
    } else {
        echo '<p>No hay publicaciones en esta clase.</p>';
    } 
    ?>
    <a href="../formupublicaciones.php">Crear publicacion</a>
  </div>
</div>
</body>
</html>