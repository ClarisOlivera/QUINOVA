 <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Colegio</title>
    <style>

      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #eeecb7;
      }

      .contenedor {
        display: flex;
        margin-top: 150px;
        padding: 20px;
        margin-bottom:100px;
      }

      .barra-lateral {
        padding: 20px;
        font-size: 22px;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .cuadricula {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        flex: 1;
        padding: 10px 20px;
        
      }

      .cuadro {
        background-color: #001840;
        color: white;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 22px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 7px 7px 7px black;
      }

      .cuadro img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
      }

      .cuadro {
        transition: transform 1s ease;
      }
      
      .cuadro :hover {
          transform: scale(1.1);
      }
    

      @media (max-width: 768px) {
        .contenedor {
          flex-direction: column;
          align-items: center;
          padding: 10px;
          margin-top: 100px;
        }

        .barra-lateral {
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: center;
          font-size: 20px;
          padding: 10px;
        }

        .cuadricula {
          grid-template-columns: 1fr;
          padding: 0 10px;
          width: 100%;
         
        }

        .cuadro {
          height: auto;
          min-height: 160px;
        }
      }
    </style>
  </head>
  <body>
  <?php include("../include/cabecera.php"); ?> 
    <div id="cuerp">
      <div class="contenedor">
      <div class="barra-lateral">
        <div>A</div>
        <div>C</div>
        <div>T</div>
        <div>I</div>
        <div>V</div>
        <div>I</div>
        <div>D</div>
        <div>A</div>
        <div>D</div>
        <div>E</div>
        <div>S</div>
      </div>

      <div class="cuadricula">
        <div class="cuadro">
          <img src="../imagenescol/imagen11.jpeg" alt="Imagen 1">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/imagen22.jpeg" alt="Imagen 2">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/imagen33.jpeg" alt="Imagen 3">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/portada1.jpg" alt="Imagen 4">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/imagen55.jpeg" alt="Imagen 5">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/banda.jpeg" alt="Imagen 6">
        </div>
      </div>
    </div>

    <div class="contenedor">
      <div class="barra-lateral">
        <div>A</div>
        <div>M</div>
        <div>B</div>
        <div>I</div>
        <div>E</div>
        <div>N</div>
        <div>T</div>
        <div>E</div>
        <div>S</div>
      </div>

      <div class="cuadricula">
        <div class="cuadro">
          <img src="../imagenescol/plantas.jpeg" alt="Imagen 1">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/secretaria.jpeg" alt="Imagen 2">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/coliseo.jpeg" alt="Imagen 3">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/biologia.jpeg" alt="Imagen 4">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/quimica.jpeg" alt="Imagen 5">
        </div>
        <div class="cuadro">
          <img src="../imagenescol/aula.jpeg" alt="Imagen 6">
        </div>
      </div>
    </div>
    </div>


    
   <?php include('../include/footer.php'); ?>
  </body>
  </html>
    
  