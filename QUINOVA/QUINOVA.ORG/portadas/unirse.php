<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Iniciamos PHP -->
  <?php 
  session_start();
  ?>
  <meta charset="UTF-8">
  <title>Unirse a la clase</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <style>
    body {
      background-color: rgb(206, 160, 0);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 850px;
      margin: 60;
      /* animation: aparecer 5s ; */
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

    .caja {
      background-color: #0d2b52;
      color: white;
      padding: 20px;
      border-radius: 10px;
      width: 600px;
      box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.8);
      /* transition: all 3s ease; */
    }
  

    .seccion {
      background-color: white;
      color: black;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 15px;
      /* transition: all 3s ease; */
    }

    .usuario {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
      /* transition: all 3s ease; */
    }

    .inicial {
      background-color: #0d2b52;
      color: white;
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50px;
      margin-right: 20px;
      font-weight: bold;
      /* transition: all 3s ease; */
    }

    .boton {
      background-color: #0d2b52;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
      /* transition: all 3s ease; */
    }
    .boton:hover
     {
      transform: scale(1.1);
}
   

    .codigo {
      width: 560px;
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: none;
      background-color: #0d2b52;
      color: white;
      /* transition: all 5s ease; */
    }

    .mensajes {
      font-size: 13px;
      margin-top: 10px;
      /* transition: all 3s ease; */
    }

    .abajo {
      text-align: right;
      font-size: 15px;
      margin-top: 15px;
      background-color: white;
      /* transition: all 3s ease; */
    }
    .abajo:hover
     {
      transform: scale(1.1);
      background-color: brown;
}
@media(min-widht: 610px){

}
header{
  flex-direction: column;
}
   
  </style>
</head>
<body>

  <div class="caja">
    <h3>Unirse a la clase</h3>
    <div class="seccion">
      <div class="usuario">
        <div>
          <strong>Cuenta : <?php echo $_SESSION['nombreCompleto'] ?></strong><br>
          <strong>Id : <?php echo $_SESSION['ci']?></strong>
        </div>
      </div>
      <button class="boton">cambio de cuenta</button>
    </div>
    <form action="unirclase.php" method="get" id="botoncito">
    <div class="seccion" >
      <strong>Código de clase</strong>
      <p>Pide a tu profesor el código de clase e introdúcelo aquí.</p>
      <input class="codigo" type="text" placeholder="Código de clase" name="codigoclass">
      <input type="Submit" href="unirclase.php">
    </div>
    </form>
    <div class="mensajes">
      <p>-Usa una cuenta autorizada</p>
      <p>-El código debe tener 5 a 8 letras o números</p>
    </div>

    <button class="abajo">
      CANCELAR 


    </button>
  </div>
  <script>
  $("#botoncito").validate({
    rules: {
      codigoclass: {
        required:true
        }
            },
    messages: {
      codigoclass: {
        required: " Llene este campo porfavor"
      }
    }
  });
  </script>

</body>
</html>