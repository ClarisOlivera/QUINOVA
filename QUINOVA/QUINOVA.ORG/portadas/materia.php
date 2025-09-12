<?php
include('../../db.php');

// Obtener el ID de la clase desde la URL
session_start();
$idClase = isset($_GET['id']) ? intval($_GET['id']) : 0;
$nombre=$_SESSION['nombreCompleto'];

        $sql1="SELECT * FROM clases WHERE id =$idClase";
        

        $resultado1=$conn->query($sql1);
        
        if($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $codigo=$fila1['codigo'];
                $nombreClase=$fila1['nombre'];
                $ci=$fila1['cuenta_User'];
                $sql2="SELECT *FROM cuenta WHERE user='$ci'";
                $resultado2=$conn->query($sql2);
                $fila2=$resultado2->fetch_assoc();
                $id=$idClase;
            }
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
      width: 80%; 
      margin-left: 23%; 
    
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
        <p><strong>Por usuario:</strong> <?php echo $_SESSION['nombreCompleto'] ?> </p>
      </div>
      

    <a href="estudiante.php">← Volver atras</a>
    
    <form action="megusta.php">
      <input type="Submit" value="Me Gusta">
    </form>
  </div>

  <div class="boton">
    <div class="circulo"></div>
    AGREGA UN ANUNCIO PUBLICO
  </div>

  <div class="boton">
    <div class="circulo"></div>
    NOMBRE Publicó una tarea: tarea
  </div>

  <div class="boton">
    <div class="circulo"></div>
    NOMBRE Publicó una tarea: tarea
  </div>
</div>
</body>
</html>