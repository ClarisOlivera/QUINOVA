<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <style>
        * { margin: 0;
             padding: 0;
             box-sizing: border-box;
            }
        body {
            background-image: url("music-musical-instrument-guitar-two-dark-background.png");
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: beige;


        }
        #caja {
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    border: 2px solid rgb(241, 241, 241);
    background: #0b0b35;
    padding: 50px;
    text-align: center;
    width: 325px;
    height: auto;
    animation-name: hola;
    animation-duration: 4s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;
}


@keyframes hola {
    0% {
        box-shadow: 0 0 20px rgba(255, 249, 249, 0.2);
    }
    50% {
        box-shadow: 0 0 35px rgba(255, 249, 249, 0.5);
    }
    100% {
        box-shadow: 0 0 18px rgba(255, 249, 249, 0.2);
    }
}

        #boton {
        margin-top: 10px;
        padding: 10px;
        width: 230px;
        height: 50px;
        background-color: aliceblue;
        background:  rgb(37, 37, 37);
        color: rgb(255, 255, 255);
        border-radius: 5px;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
        font-size: 25px;
        font-family: 'Brush Script MT', cursive;
        font-weight: 100;
        }
        #boton:hover {
            background-color: rgb(70, 69, 69);
        }
        a{
            color: black;
            text-decoration: none;
            margin-top: 10px;
        }
        .titulo{
            font-family: 'Cinzel', serif;
            font-size: 48px;
            color: #e9e7cc;
        }
        .subtitulo {
            font-family: 'Brush Script MT', cursive;
            font-size: 32px;
            color: #cecba8;
        }
        
        label.error {
            color: beige;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        #caja label {
           color: beige;
           font-size: 16px;
           margin-top: 10px;
           text-align: left;
        }
        
    </style>
</head>
<body>
    <form action="logueo2.php" method="post" id="caja">
            <div class="titulo">QUINOVA</div>
            <div class="subtitulo">Inicia Sesión</div><br>
            <label for="CodigoRude">Carnet de Identidad</label>
            <input type="number" id="ci" name="ci"><br>
            <label for="contra">Contraseña</label>
            <input type="password" id="contra" name="contra"><br><br>
            <input type="Submit">
        </form>
        <a href="segundoform.php">Registrate</a>
    </div>
    <script>
       
        $("#caja").validate({
            rules: {
                NombreCompleto: {
                    required:true,
                    minlength:10,
                    maxlength:30
                },
                CodigoRude: {
                    required:true,
                    digits:true,
                    minlength:10,
                    maxlength:25
                },
                rol: {
                    required:true,
                    minlength:5,
                    maxlength:20
                },
                contra: {
                    required:true,
                    minlength:8,
                    maxlength:25
                }
            },
            messages: {
                NombreCompleto:{
                    required: " Llene este campo porfavor",
                minlength: "El mínimo de letras es 10",
                maxlength: "El máximo de letras es 30"
                   
                },
           
                CodigoRude: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 10 digitos",
                    maxlength: "El codigo no debe de ser mayor a 25"
                },
                rol:{
                required: " Llene este campo porfavor",
                minlength: "El mínimo de letras es 5",
                maxlength: "El máximo de letras es 20"
                   
                },
                contra: {
                    required: " Llene este campo porfavor",
                    minlength: "El ingreso de digitos debe ser al menos 8",
                    maxlength: "El ingreso de digitos no debe de ser de mas de 25"
                }
            }
        });
</script>
</body>
</html>