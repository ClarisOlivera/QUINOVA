<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         #superior {
            display: flex;
            background-color: rgb(40, 40, 100);
            height: 20%;
            position: fixed;
            top: 0;
            width: 100%;
          
        }
      
        #logo {
            width: 100px;
            height: 100px;
            border-radius: 50px;
            margin: 25px 20px 0 20px;
            animation: girar 7s linear infinite;
            text-shadow: 0px 4px 5px black;
        }

        @keyframes girar {
            100% {
                transform: rotate(360deg);
            }
        }

        #titulo {
            font-size: 50px;
            color: white;
            margin-top: 50px;
        }

        body {
            background-color: bisque;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        #paginas {
            display: flex;
            color: black;
            margin-left: auto;
            margin-right: 20px;
            align-items: center;
        }

        #paginas a {
            color: black;
            background-color: bisque;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s, font-size 0.3s ease;
            margin: 8px;
            font-size: 30px;
        }

        #paginas a:hover {
            background-color: #887c7c;
            font-size: 50px;
        }

         @media (max-width: 768px) {
            #superior, #inferior {
                flex-direction: column;
                height: auto;
                text-align: center;
                position: static;
            }

            #logo {
                margin: 10px auto;
            }

            #titulo {
                font-size: 30px;
            }

            #titulo:hover {
                font-size: 40px;
            }

            #paginas {
                flex-direction: column;
                align-items: center;
                margin: 10px 0;
            }

            #paginas a {
                font-size: 30px;
                margin: 5px 0;
            }

            #paginas a:hover {
                font-size: 35px;
            }
        }


    </style>
</head>

<body>
     <header>
      <div id="superior">
              <img src="../imagenescol/logo.jpeg" alt="logo" id="logo">
            <h1 id="titulo">"Elena Arce"</h1>
            <nav id="paginas">
                <a href="principal.php">Principal</a>
                <a href="nosotros.php">nosotros</a>
                <a href="historia.php">historia</a>
                <a href="ambientes.php">ambientes</a>
                <a href="contacto.php">Contacto</a>
                <a href="../segundosprintbd/primerform.php">Classroom</a>
            </nav>
        </div>
    </header>

</body>
</html>