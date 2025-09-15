<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";
    $conn=new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
      die("Conexion Fallida: ".$conn->connect_error);
    }
session_start();

$ci=$_SESSION['ci'];
$sql1="SELECT * FROM informacion WHERE ci =$ci;";

    $resultado1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($resultado1) > 0){
        $fila1 = mysqli_fetch_assoc($resultado1);
    }
 
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
        }
        div {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
        </style>    
  </head>
  <body>
    <div>
    <h1>Bienvenido Docente</h1>
    <h2>Nombre : <?php echo $fila1['nombres'] . " " . $fila1['apellidos']; ?></h2>
    <h2>Curso encargado : <?php echo $fila1['curso']; ?></h2>
    </div>
    <div>
        <h2>Tus cursos</h2>
        <?php
        $sql2="SELECT * FROM clases WHERE cuenta_User = $ci ;";
        
        $resultado2 = mysqli_query($conn, $sql2);
        if(mysqli_num_rows($resultado2) > 0){
            while($fila2 = mysqli_fetch_assoc($resultado2)){
                echo "<p>Curso: <a href='materiaDocente.php?codigo=" . $fila2['codigo'] . "'>" . $fila2['nombre'] . "</a> - Codigo: " . $fila2['codigo'] . "</p>";
            }
        } else {
            echo "<p>No tienes cursos asignados.</p>";
        }
        ?>
    </div>
    <div>
        <?php 
            echo "<a href='./cerrarSesion.php'>Cerrar Sesion</a>";
        ?>
    </div>  
  </body>
  </html>