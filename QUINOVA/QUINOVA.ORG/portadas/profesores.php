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
    $id=$_SESSION['ci'];
    $sql1="SELECT * FROM clases WHERE cuenta_User =$id";
    $resultado1=$conn->query($sql1);    
    $resultado2=$conn->query($sql1);    
 
?>

<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>QUINOVA</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #ffffff;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0;
      font-size: 18px;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: rgb(206, 160, 0);
      text-align: center;
      height: 140px;
      width: 100%;
      position: fixed;
      top: 0;
      border-bottom: 4px solid rgba(206, 161, 0, 0.473);
      z-index: 1000;
      text-shadow: 0px 4px 5px rgb(255, 255, 255);
      font-size: 19px;
    }

    #logo {
      height: 100px;
      width: 100px;
      border-radius: 50%;
      top: 20px;
      left: 20px;
      position: absolute;
      animation: girar 7s linear infinite;
      text-shadow: 0px 4px 5px black;
    }

    @keyframes girar {
      100% {
        transform: rotate(360deg);
      }
    }

    #Cuerpo {
      display: flex;
      width: 100%;
      max-width: 1400px;
      gap: 20px;
      margin-top: 150px;
      height:800px;
      overflow: hidden;
    }

    #izq {
      position: fixed; 
      left:0;          
      top: 0;
      background-color: #001b44;
      padding: 160px 10px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      width: 250px;
      height: 100vh;     
      border-radius: 0 8px 8px 0;  
      box-shadow: 4px 0 8px rgba(0, 0, 0, 0.3);
    }

    #izq a{
      text-decoration: none;
      padding: 20px 15px;
      border-radius: 8px;
      color: white;
      font-size: 1.2rem;
      transition: background-color 0.3s ease;
    }
    #izq #buttonizq:hover {
      background-color: #003366;
    }

    #der {
      flex: 1;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 80px;
      padding: 110px;
      overflow-y: auto;
      height: 100%;
      margin-left: 250px; /* <-- Espacio para el menú fijo */
    }

    .unirse {
      color: #000000;
      background-color: white;
      padding: 10px;
      border-radius: 10px;
      text-decoration: none;
      left: 850px;
      position: relative;
      bottom: 80px;
    }

    .materia, .clase {
      width: 100%;
      height: 325px;
      border-radius: 20px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      font-size: 1.3rem;
      box-shadow: 4px 4px 10px rgba(0,0,0,0.2);
    }

    .materia .superior, .clase .superior {
      background-color: #001b44;
      color: white;
      padding: 35px;
      flex: 0.6;
    }

    .materia .inferior, .clase .inferior {
      background-color: #f8ecd9;
      flex: 3;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .materia:hover, .clase:hover {
      transform: scale(1.03);
      transition: transform 0.2s ease;
    }

    #mas {
      position: absolute;
      top: 40px;
      right: 50px;
    }

    #mas img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    input {
      display: none;
    }

    #botones {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 30px;
      right: 70px;
      background-color: #0c0c44;
      border-radius: 10px;
      padding: 10px;
      z-index: 1001;
    }

    #botones a{
      color:white;
      text-decoration: none;
      padding: 10px;
      margin: 5px 0;
      border: 2px solid white;
      border-radius: 5px;
      text-align: center;
    }    

    #botones a:hover {
      background-color: #003366;
    }

    input {
      display: none;
    }

    input:checked ~ #botones {
      display: flex;
    }

    /* ----------- MEDIA QUERIES FOR RESPONSIVENESS ----------- */
    @media (max-width: 1100px) {
      #Cuerpo {
        max-width: 100vw;
        gap: 10px;
        padding: 0;
      }
      #der {
        grid-gap: 30px;
        padding: 40px;
        margin-left: 180px;
      }
      .materia, .clase {
        height: 260px;
        font-size: 1.1rem;
      }
      #izq {
        width: 180px;
        padding-top: 150px;
      }
    }
    @media (max-width: 900px) {
      #Cuerpo {
        flex-direction: column;
        height: auto;
        max-width: 100vw;
        margin-top: 160px;
      }
      #izq {
        position: static;
        width: 100vw;
        height: auto;
        flex-direction: row;
        overflow-x: auto;
        padding: 18px 5px 12px 5px;
        border-radius: 0 0 12px 12px;
        box-shadow: none;
        justify-content: start;
        align-items: center;
      }
      #izq #buttonizq {
        font-size: 0.92rem;
        white-space: nowrap;
        padding: 8px 10px;
        margin: 0 3px;
      }
      #der {
        padding: 14px;
        grid-template-columns: 1fr;
        grid-gap: 18px;
        margin-left: 0; /* Quita espacio para el menú */
      }
      .materia, .clase {
        min-width: 230px;
        height: 170px;
        font-size: 1rem;
      }
      header h1 {
        font-size: 4vw;
        text-align: center;
      }
      #logo {
        height: 70px;
        width: 70px;
        top: 14px;
        left: 14px;
      }
      #mas {
        top: 16px;
        right: 28px;
      }
      #mas img {
        width: 38px;
        height: 38px;
      }
      #botones {
        top: 10px;
        right: 34px;
      }
    }
    @media (max-width: 600px) {
      header {
        height: 95px;
        font-size: 15px;
      }
      header h1 {
        font-size: 5vw;
      }
      #logo {
        height: 45px;
        width: 45px;
        top: 8px;
        left: 8px;
      }
      #mas {
        top: 6px;
        right: 10px;
      }
      #mas img {
        width: 24px;
        height: 24px;
      }
      #botones {
        top: 2px;
        right: 10px;
        padding: 5px;
      }
      #der {
        padding: 5px;
        grid-template-columns: 1fr;
        grid-gap: 9px;
      }
      .materia, .clase {
        min-width: 120px;
        height: auto;
        font-size: 0.92rem;
      }
      .materia .superior, .clase .superior {
        padding: 10px;
      }
      #izq {
        padding: 7px 2px 7px 2px;
      }
      #izq a{
        font-size: 0.7rem;
        padding: 6px 3px;
        margin: 0 1px;
      }
    }
    @media (max-width: 400px) {
      header {
        height: 60px;
        font-size: 9px;
      }
      header h1 {
        font-size: 6vw;
      }
      #logo {
        height: 26px;
        width: 26px;
        top: 2px;
        left: 2px;
      }
      #mas {
        top: 2px;
        right: 2px;
      }
      #mas img {
        width: 14px;
        height: 14px;
      }
      #botones {
        top: 0px;
        right: 2px;
        padding: 2px;
      }
      #der {
        padding: 2px;
        grid-template-columns: 1fr;
        grid-gap: 4px;
      }
      .materia, .clase {
        font-size: 0.8rem;
      }
      .materia .superior, .clase .superior {
        padding: 5px;
      }
      #izq {
        padding: 2px 1px 2px 1px;
      }
      #izq a{
        font-size: 0.5rem;
        padding: 2px 1px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1 id="colegio">Profesores<br>"Elena Arze de Arze"<br></h1>
    <img src="../imagenescol/logo.jpeg" alt="logo" id="logo">
    <div id="mas">
      <label for="un">
        <img src="https://media.gettyimages.com/id/1493119811/es/vector/agregar-icono-s%C3%B3lido-el-dise%C3%B1o-es-adecuado-para-el-dise%C3%B1o-de-p%C3%A1ginas-web-aplicaciones.jpg?s=612x612&w=gi&k=20&c=oAd37u5lELXzZCZtnUAiu2Ag2p3BMNAZXAhf3QXJe7A=" alt="">
      </label>
      <input type="checkbox" id="un" />
      <nav id="botones">
        <a href="crear.php" id="crear">Crear</a>
        <a href="unirse.php" id="unirse">Unirse</a>
        <a href="cerrarSesion.php" id="cerrar">Cerrar</a>
      </nav>
    </div>
  </header>

  <section id="Cuerpo">
    <nav id="izq">
      <?php
      if($resultado1->num_rows>0){
         while($fila1=$resultado1->fetch_assoc()){
?>

<div class="izq">
              <a id="a" href="materiaDocente.php?id=<?php echo $fila1['id']?>">
<?php
            $codigo=$fila1['codigo'];
            $nombreClase=$fila1['nombre'];
            $ci=$fila1['cuenta_User'];
?>
      <a class="buttonizq" href="materiaDocente.php?id=<?php echo $fila1['id']?>"><?php echo $nombreClase ?></a>

<?php
        }
    }
?>
    </nav>

    <main id="der">
<?php
      if($resultado2->num_rows>0){
        while($fila2=$resultado2->fetch_assoc()){
?>

            <a id="a" href="materiaDocente.php?id=<?php echo $fila2['id']?>">
            <div class="materia">
<?php
            $codigo=$fila2['codigo'];
            $nombreClase=$fila2['nombre'];
            $ci=$fila2['cuenta_User'];
?>
        <div class="superior"><strong><?php echo $nombreClase . " "?></strong><br><?php echo "Codigo : ". $codigo ?>
      </div>
          <div class="inferior">
            <?php echo "<a href='./cambiarNombreMateria.php?codigo=$codigo'>Cambiar nombre</a>" ?>
          </div>
        </div>
        </a>
<?php
        }
    }
?>
    </main>
  </section>
</body>
</html>