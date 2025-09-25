<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 200px;
      margin: 0;
      background-color: beige;
    }

    /* Animación para que la sección aparezca suavemente */
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .contacto {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      background-color: rgba(230, 158, 5, 1); 
      padding: 15px;
      border-radius: 20px;
      height: 1000%;
      width: 80%;
      min-width: 500px;
      margin: auto;
      margin-top: 11%;
      margin-bottom: 11%;

      /* Animación al cargar */
      animation: fadeInUp 1s ease-in-out;
    }

    /* Caja de información con animación hacia dentro */
    .info {
      flex: 1 1 300px;
      transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .info:hover {
      transform: scale(0.95); /* Se encoge hacia dentro */
    }

    .info h1 {
      margin-bottom: 20px;
      color: rgb(21, 24, 48);
      transition: color 0.3s ease;
    }
    .info p {
      margin: 10px 0;
      font-weight: bold;
      color: rgb(21, 24, 48);
    }

    /* Caja del mapa con animación hacia afuera */
    .mapa {
      flex: 1 1 300px;
      min-width: 250px;
      background-color: rgb(21, 24, 48);
      padding: 80px;
      border-radius: 10px;
      text-align: center;
      transition: transform 0.4s ease;
    }

    .mapa:hover {
      transform: scale(1.03); /* Se expande hacia afuera */
    }

    .mapa iframe {
      width: 100%;
      height: 350px;
      border: 0;
      border-radius: 15px;
      transition: box-shadow 0.3s ease;
    }

    .mapa iframe:hover {
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }

    @media (max-width: 768px) {
      .mapa {
        flex: 1 1 300px;
        min-width: 250px;
        background-color: rgb(21, 24, 48);
        padding: 100px;
        border-radius: 10px;
        text-align: center;
      }

      .mapa iframe {
        width: 50%;
        height: 350px;
        border: 0;
        border-radius: 15px;
        display: flex;
      }

      .contacto {
        padding: 2px;
      }
    }
  </style>
</head>
<body>
  <?php include('../include/cabecera.php'); ?> 
  <div class="contacto">
    <div class="info">
      <h1>Ponte en contacto </h1><br> 4 4407166<br>
      <p>DIRECCIÓN:</p><br>Calle Adela Zamudio <br>y América, Cochabamba, Bolivia
      <p>TELÉFONOS:</p><br> 4 4407166<br>
      <p>HORARIOS DE ATENCIÓN:</p><br>8:00am- 12:30pm<br>
    </div>
    <div class="mapa">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.8619699619817!2d-66.16691072388028!3d-17.37037366373474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e374155bcecaf9%3A0x3e0a8a3feb0bac9!2sC.E.A.%20Cochabamba!5e0!3m2!1ses!2sbo!4v1753978071634!5m2!1ses!2sbo" 
       width="600" height="450" style="border:0;" allowfullscreen="" 
       loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
 
  <?php include('../include/footer.php'); ?> 
</body>
</html>