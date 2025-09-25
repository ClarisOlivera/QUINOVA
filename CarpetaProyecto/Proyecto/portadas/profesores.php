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
            font-family:'Times New Roman', Times, serif;
            background-color: #14207bff;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #ffffffff;
            font-size: 4vh;
        }
        h2 {
            color: #555;
        }
        #datos {
            background: #f5f0f092;
            padding: 10px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            margin-left: -3vh;
        }
        #cursos {
            background-color: #f5f0f092;
            padding: 30px;
            border-radius: 8px;
        }
        #clases {
            background-color: #ffffffff;
            padding: 50px;
            border-radius: 10px;
            max-width: 200px;
        }
        p {
            font-size: 20px;

        }
        </style>    
  </head>
  <body>
    <div id="datos">
    <h1>Bienvenido Profesor: <?php echo $fila1['nombres'] . " " . $fila1['apellidos']; ?></h1>
    <h2>Del Curso: <?php echo $fila1['curso']; ?></h2><br>
    </div> <br> <br>
    <div id="cursos">
        <h2>Tus cursos</h2>
        <div id="clases">
        <?php
        $sql2="SELECT * FROM clases WHERE cuenta_User = $ci ;";
        
        $resultado2 = mysqli_query($conn, $sql2);
        if(mysqli_num_rows($resultado2) > 0){
            while($fila2 = mysqli_fetch_assoc($resultado2)){
                echo "<p>Curso: <a href='materiaDocente.php?codigo=" . $fila2['codigo'] . "'>" . $fila2['nombre'] . "</a> <br>
                Codigo: " . $fila2['codigo'] . "</p>";
            }
        } else {
            echo "<p>No tienes clases creadas aun.</p>";
        }
        ?>
        </div>
    </div>
    <div id="cursos">
        <?php 
        echo "<a href='./crear.php'>Crear Clase</a>"; 

            echo "<a href='./cerrarSesion.php'>Cerrar Sesion</a>";
        ?>
    </div>  
  </body>
  </html>