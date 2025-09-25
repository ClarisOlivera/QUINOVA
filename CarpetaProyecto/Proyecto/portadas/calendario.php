<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendario de Actividades</title>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  
    <style>
      
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: var(--gris-claro);
            color: var(--gris-oscuro);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
            background-color: var(--blanco);
            margin: 1rem;
            border-radius: 12px;
            padding: 2rem;
            border-top: 5px solid var(--dorado);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .calendario {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--azul-oscuro);
            font-weight: bold;
            text-align: center;
        }
        .calendario {
            width: 100%;
            max-width: 700px;
            height: 500px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.1);
            background: #fff;
        }
        
        #contenedor{
            background-color: #353652ff;
            display: flex;                                                                                              
            

        }
        @media (max-width: 800px) {
            main {
                margin: 0.5rem;
                padding: 1rem;
            }
            .calendario {
                height: 350px;
            }
        }
    </style>
</head>
<body>
    
     <div id="contenedor">
            <?php include '../include/cabecera.php'; ?>
   
    <main>
        <div class="calendar-title">📅 Calendario de Actividades</div>
        <iframe class="calendario" src="https://calendar.google.com/calendar/embed?src=es.bolivia%23holiday%40group.v.calendar.google.com&ctz=America%2FLa_Paz" allowfullscreen></iframe>
    </main>
    
        <?php include '../include/footer.php'; ?>
    
     </div>
</body>
</html>