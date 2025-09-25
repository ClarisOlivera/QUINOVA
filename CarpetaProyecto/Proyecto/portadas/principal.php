<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<title>Contenido Página</title>
<style>
  body {
      background:linear-gradient(rgba(255,255,255,0.3)), url("../fotos/img9.jpeg");
    background-size: cover;
    
  }

  .contenido-lema {
    display: flex;
    flex-direction: column;      /* apila los elementos verticalmente */
    align-items: center;         /* centra horizontalmente */
    justify-content: center;     /* centra verticalmente dentro del contenedor */
    text-align: center;          /* centra el texto de los elementos hijos */
    margin: 100px 20px;          /* más margen para separarlo del header */
  }

  .lema {
    font-family: 'Poppins', sans-serif;
    font-size: 60px;
    color: rgba(255, 255, 255, 1);
    font-size: 80px;          
    font-weight: 600;         
    margin-bottom: 20px;
    text-shadow: 2px 2px 8px rgba(245, 230, 95, 0.5); 
  }

  .sublema {
    font-family: 'Poppins', sans-serif;
    font-size: 60px;
    color: rgb(40, 40, 100);
    margin-top: 10px;
    text-shadow:2px 2px 8px rgba(245, 230, 95, 0.9);
  }

  .caja-derecha {
    width: 450px;
    height: 450px;
    border-radius: 12px;
    overflow: hidden;
  }

  .caja-derecha img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  #asunte {
    margin: 50px auto 100px auto; 
    padding: 30px;
    max-width: 800px; 
    width: 65%;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    color: #333;
  }

  #asunte input, #asunte textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  #asunte input[type="submit"] {
    background-color: #2c3e50;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 5px;
  }

  #asunte input[type="submit"]:hover {
    background-color: #4ca1af;
  }

  @media (max-width: 768px) {
    .contenido-lema {
      flex-direction: column;
      align-items: flex-start;
      margin: 20px;
    }

    .lema {
      font-size: 40px;
      
    }
    .caja-derecha {
      width: 100%;
      height: 200px;
      margin-top: 20px;
    }
  }
</style>
</head>
<body>

<?php include('../include/cabecera.php'); ?> 

<section class="contenido-lema">
  <div>
    <h2 class="lema">Lema 2025</h2>
    <h3 class="sublema">“Si algo tenemos que hacer, <br> hagámoslo bien”</h3>
  </div>
</section>

<section id="asunte">
  <form action="archivo2.php" method="post">
    <label for="asuntito">ASUNTO:</label>
    <input type="text" name="asuntito" id="asuntito" required>

    <label for="come">COMENTARIO:</label>
    <textarea name="come" id="come" rows="5" required></textarea>

    <input type="submit" value="Enviar">
  </form>
</section>

<?php include('../include/footer.php'); ?> 

</body>
</html>