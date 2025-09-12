<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Colegio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    
    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .contenedor {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 30px 20px;
      margin-top: 10%;
     }

    .caja {
      background-color: darkblue;
      color: #f5f0e6;
      padding: 30px 20px;
      width: 400px;
      border-radius: 10px;
      font-size: 18px;
      text-align: center;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     transition: transform 0.3s ease; /* Agrega transición suave */
   }

    .caja:hover {
     transform: scale(1); 
     color:GOLD;
     background:black;

       }

    .caja h2 {
      font-size: 26px;
      margin-top: 0;
      margin-bottom: 10px;
    }

    .linea-divisoria {
      height: 4px;
      background-color: #000000;
      margin: 40px auto;
      width: 80%;
      border-radius: 4px;
    }

    .main {
      display: flex;
      justify-content: center;
      padding: 30px 20px;
      gap: 40px;
    }

    .left-side, .right-side {
      max-width: 600px;
    }

    .left-side h2 {
      font-size: 26px;
      text-align: center;
      margin-bottom: 20px;
      font-family: Garamond;
    }

    .right-side {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .circulos {
      text-align: center;
    }

    .ciquito {
      background-color: darkblue;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin: 0 auto 10px;
    }

    .circulo-texto {
      font-weight: bold;
      font-size: 16px;
      font-family: Garamond;
    }

    #tercero {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
      gap: 30px;
    }

    .nivel-item {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      gap: 30px;
     
    }

    .nivel-img, .nivel-texto {
      width: 300px;
      height: 180px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
      border-radius: 8px;
    }

    .nivel-img {
      background-color: darkblue;
      border: 2px solid black;
      
    }

    .nivel-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 6px;
    }

    .nivel-texto {
      background-color: #eee;
      border: 2px solid #aaa;
      padding: 10px;
    }

    #cuarto {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 15vh;
    }

    #cuarto a {
      background-color: darkblue;
      font-family: 'Times New Roman', Times, serif;
      color: white;
      padding: 10px 20px;
      border-radius: 25px;
      margin-bottom: 29vh;
      text-decoration: none;
    }

    @media screen and (max-width: 900px) {
      .contenedor,
      .main {
        flex-direction: column;
        align-items: center;
      }

      .right-side {
        grid-template-columns: 1fr;
      }

      .nivel-item {
        flex-direction: column;
      }

      .nivel-img, .nivel-texto {
        width: 90%;
      }
    }

    @media screen and (max-width: 480px) {
      .ciquito {
        width: 80px;
        height: 80px;
      }

      .circulo-texto {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <?php include('../include/cabecera.php'); ?>

  <!-- Misión y Visión -->
  <div class="contenedor">
    <div class="caja">
      <h2>🎯 MISIÓN</h2>
      <p>
        Formar estudiantes íntegros, con una sólida preparación académica que desarrollen una vocación de servicio para la comunidad y sociedad, a través de la práctica de los valores de la disciplina, respeto y responsabilidad.
      </p>
    </div>
    <div class="caja">
      <h2>👁 VISIÓN</h2>
      <p>
        Formar estudiantes con habilidades sociales, emocionales y académicas, enfatizando la práctica de los valores humanos y la participación activa de todos los actores educativos.
      </p>
    </div>
  </div>

  <div class="linea-divisoria"></div>

  <!-- ¿Por qué la unidad educativa...? -->
  <div class="main">
    <div class="left-side">
      <h2>¿POR QUÉ LA UNIDAD EDUCATIVA “ELENA ARZE DE ARZE”?</h2>
      <div class="caja">
        Somos una institución con historia, fundada en 1947, que forma estudiantes íntegros, con excelencia académica, valores humanos y compromiso social, a través de una educación contextualizada, científica e innovadora.
      </div>
    </div>

    <div class="right-side">
      <div class="circulos">
        <div class="ciquito"></div>
        <div class="circulo-texto">DIR. DAVID FELIX CORDERO ARANCIBIA</div>
      </div>
      <div class="circulos">
        <div class="ciquito"></div>
        <div class="circulo-texto">SEC. MARGARITA LARA BARRIENTOS</div>
      </div>
      <div class="circulos">
        <div class="ciquito"></div>
        <div class="circulo-texto">AA. MARITZA LUIZAGA ESPINOZA</div>
      </div>
      <div class="circulos">
        <div class="ciquito"></div>
        <div class="circulo-texto">AA. DAMARIS VARGAS GARCIA</div>
      </div>
    </div>
  </div>

  <div class="linea-divisoria"></div>

  <!-- Niveles -->
  

    <div class="nivel-item">
      <div class="nivel-img">
        <img src="../imagenescol/secundaria.jpg" alt="Secundaria">
      </div>
      <div class="nivel-texto">
         En el Nivel Secundario preparamos a estudiantes para desafíos académicos y profesionales.
      </div>
    </div>
  </div>

  <!-- Botón -->
  <div id="cuarto">
    <a href="plantel.php">Plantel docente</a>
  </div>

  <!-- Incluir footer -->
  <?php include('../include/footer.php'); ?>
</body>
</html>