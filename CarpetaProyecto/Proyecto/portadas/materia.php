<?php
include('../../db.php');

// Obtener el ID de la clase desde la URL
session_start();
$codigoClase = $_GET['codigo'];
$_SESSION['codigoClase'] = $codigoClase;
$sql1="SELECT * FROM clases WHERE codigo ='$codigoClase'";  
$resultado1=$conn->query($sql1);
$consultaMateria = "SELECT * FROM clases WHERE codigo = '$codigoClase'";
        $resultadoMateria = mysqli_query($conn, $consultaMateria);
        if($resultadoMateria && mysqli_num_rows($resultadoMateria) > 0){
            $filaCurso = mysqli_fetch_assoc($resultadoMateria);
            $ciProfesor = $filaCurso['cuenta_User'];
            $_SESSION['idClase'] = $filaCurso['id'];

          }
          if($resultado1->num_rows>0){
            $fila1=$resultado1->fetch_assoc();
            $codigo=$fila1['codigo'];
            $nombreClase = $fila1['nombre'];
            $ci=$fila1['cuenta_User'];
          }    
        $consultaProfesor = "SELECT * FROM informacion WHERE ci = '$ciProfesor'";
        $resultadoProfesor = mysqli_query($conn, $consultaProfesor);
        if($resultadoProfesor && mysqli_num_rows($resultadoProfesor) > 0){
          $filaProfesor = mysqli_fetch_assoc($resultadoProfesor);

            $nombreProfesor = $filaProfesor['nombres']." ".$filaProfesor['apellidos'];
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
        <p><strong>Código:</strong> <?php echo $codigo; ?></p>
        <p><strong>Por docente:</strong> <?php echo $nombreProfesor ?> </p>
      </div>
    <a href="estudiante.php">← Volver atras</a>
    <a href="http://"></a>
    
    <form action="megusta.php">
      <input type="Submit" value="Me Gusta">
    </form>
  </div>
    <div class="contenedor">
      <a href="tareas.php?codigo=<?php echo $_SESSION['codigoClase']; ?>">Ver tareas</a>
    </div>
  <div class="contenedor">
    <h2>Publicaciones</h2>
    <?php
    // Consulta para obtener las publicaciones de la clase
    $sqlPublicaciones = "SELECT * FROM publicaciones WHERE clases_id = '$_SESSION[idClase]
' ORDER BY fechaC DESC";

    $resultadoPublicaciones = $conn->query($sqlPublicaciones);
    if ($resultadoPublicaciones->num_rows > 0) {
        while ($filaPub = $resultadoPublicaciones->fetch_assoc()) {
            $idPublicaciones = $filaPub['id'];
            $nombreArchivo="P-".$_SESSION['ci']."-".$idPublicaciones;
            
            $directorio = "../publicaciones/";
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
            
            

            echo '<div class="boton">';
            echo '<div>';
            echo '<p>' .(htmlspecialchars($filaPub['contenido'])) . '</p>';
            echo '<small>Publicado el ' . $filaPub['fechaE'] . '</small><br>';
            echo '<small>Por: ' . $filaPub['nombre']. '</small><br>';
            if($filaPub['nombre'] == $_SESSION['nombreCompleto']){    
              if ($archivoEncontrado) {

                $extension = strtolower(pathinfo($archivoEncontrado, PATHINFO_EXTENSION));
                // Mostrar según el tipo
                if (in_array($extension, ["jpg", "jpeg", "png", "gif", "webp"])) {
                    echo "<img src='$archivoEncontrado' alt='Archivo' width='250'>";
                } elseif ($extension === "pdf") {
                    echo "<embed src='$archivoEncontrado' type='application/pdf' width='700' height='300'>";
                    
                } else {
                    echo "<a href='$archivoEncontrado' download>📁 Descargar archivo</a>";
                }
            }
              echo "<br>";
              echo "<a href='editarPublicacion.php?id=" . $filaPub['id'] . "'>Editar</a>";
              echo "<br>" . "<a href='../tercersprint/eliminarPublicacion.php?id=" . $filaPub['id'] . "'>Eliminar</a>";

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