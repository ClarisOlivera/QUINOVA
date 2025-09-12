<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf‑8">
  <meta name="viewport" content="width=device‑width, initial‑scale=1">
  <title>Centra la imagen</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
        background-color: bisque;
     }
      #plantel {
      display: flex;
      justify-content: center;
      align-items: center;
     
      margin-bottom: 15%;
       animation: aparecer 5s ;
    }

    @keyframes aparecer {
      0% {
        opacity: 0.8;
        transform: scale(0.50);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }
   h1{
    margin-top: 12%;
    text-shadow: 2px 2px 5px black;
    transition: all 5s ease;
     cursor: pointer;
   }
   h1:hover{
     transform: scale(1.2s);
   }

   
  </style>
</head>
<body>
    
<?php include('../include/cabecera.php'); ?> 
<h1><center>PLANTEL DOCENTE <br> 2025</center></h1>
  <div id="plantel">
    
      <img src="../imagenescol/profe.jpeg" alt="profes">
    </div>

   <?php include('../include/footer.php'); ?> 

</body>
</html>