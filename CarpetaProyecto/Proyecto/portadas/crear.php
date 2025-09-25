<?php
include('../../db.php');
session_start();
$nombre=$_SESSION['nombreCompleto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background-image: url(../imagenescol/fondopantalla.jpg);
            background-position: center;
            
        }
        #cajaForm{
            background-color: rgba(0, 0, 0, 0.29);
        }
        div {
            top: 15vh;
            position: relative;
            width: 13cm;
            padding: 3cm;
            border-radius: 10px;
            border: 2px solid #ffffffff;
        }

        input {
            background-color: #ffffffff;
            color: #000000;
            width: 15cm;
            border-radius: 0px;
            height: 1cm;
            font-family: 'Times New Roman', Times, serif;
            margin-left: -50px;
        }

        input:hover {
            background-color: #ccccccff;
        }

        ::placeholder {
            color: #0000003b;
        }

        legend {
            color: #ffffffff;
            text-align: left;
            bottom: 100px;
            right:60px;
            position: relative;
            font-size: 60px;
            font-family: 'Times New Roman', Times, serif;
            bottom: 5vh;
        }

        a {
            text-decoration: none;
            color: #1d2148;
            position: relative;
            left: 4cm;
            background-color: #FFF6E5;
            border-radius: 10px;
            padding: 30px;
        }

        a:hover {
            font-size: 20px;
        }

        #nube {
            margin-right: 20px;
        }
        #ndlcc {
            color: #ffffffff;
            font-family: 'Times New Roman ', Times, serif;
            font-size:2vh;
            margin-left:-30vh;
        }
        #codigo{
            color: #ffffffff;
            font-family: 'Times New Roman ', Times, serif;
            font-size:2vh;
            margin-left:-53vh;
        }
        @media(max-width: 768px) {
            div {
                width: 100px;
                padding: 20px;
                height: 90%;
            }

            input {
                width: 100%;
                height: 45px;
                height: 90%;
            }

            a {
                display: block;
                width: 80%;
                margin: 10px auto;
                text-align: center;
                padding: 15px;
                left: 0;
                height: 90%;
            }

            legend {
                font-size: 28px;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <center>
        <div id="cajaForm">
            <form action="./crearclase.php" method="post" id="mango">
                <legend>CREAR CLASE</legend>
                <label for="" id="ndlcc">NOMBRE DE LA CLASE Y CURSO</label>
                <input type="text" placeholder="Ej: BIOLOGIA CELULAR 5to B" name="Nombre"><br><br>
                <label for="" id="codigo">CODIGO</label><br>
                <input type="text" placeholder="Ej. 30a05n" name="Seccio"><br><br>

                <input type="Submit" value="CANCELAR" formnovalidate><br><br>
                <input type="Submit" value="CREAR">
            </form>
        </div>
    </center>

    <script>

            $("#mango").validate({
                rules: {
                    Nombre: {
                        required: true,
                        minlength: 3,
                        maxlength: 40
                    },
                    Seccio: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    }, 
                    Mate: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    Aul: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                },
                messages: {
                    Nombre: {
                        required: "El nombre que se vaya a poner es obligatorio",
                        minlength: "Debe tener mínimo 3 letras",
                        maxlength: "No debe pasar de 40 letras"
                    },
                    Seccio: {
                        required: "La sección que se vaya a poner es obligatoria",
                        minlength: "Debe tener mínimo 3 letras",
                        maxlength: "No debe pasar de 20 letras"
                    },
                    Mate: {
                        required: "La materia que se vaya a poner es obligatoria",
                        minlength: "Debe tener mínimo 3 letras",
                        maxlength: "No debe pasar de 20 letras"
                    },
                    Aul: {
                        required: "El aula que se vaya a poner es obligatoria",
                        minlength: "Debe tener mínimo 3 letras",
                        maxlength: "No debe pasar de 20 letras"
                    }
                }
            });

        
    </script>
</body>
</html>

