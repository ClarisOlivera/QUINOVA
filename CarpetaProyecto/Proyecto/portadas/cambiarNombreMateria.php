<?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";
    $codigoCurso = $_GET['codigo'];
    $conn=new mysqli("localhost", $username, $password, $dbname);
    
    if($conn->connect_error){
        die("Conexion Fallida: ".$conn->connect_error);
    }
    $sql = "SELECT * FROM clases WHERE codigo=".$codigoCurso.";";
    $resultado = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $filaResultado = mysqli_fetch_assoc($resultado);
        $nombreCurso = $filaResultado['nombre'];
        $codigoCurso = $filaResultado['codigo'];
    }   
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
        }

        div {
            background-color: #1d334a;
            top: 150px;
            position: relative;
            width: 13cm;
            padding: 1cm;
            border-radius: 20px;
            border: 5px solid #FFF6E5;
        }

        input {
            background-color: #FFF6E5;
            color: #000000;
            width: 12cm;
            border-radius: 20px;
            height: 1cm;
            font-family: 'Times New Roman', Times, serif;
            left: 2cm;
        }

        input:hover {
            background-color: #b9b9b9;
        }

        ::placeholder {
            color: #000000;
        }

        legend {
            color: #FFF6E5;
            text-align: left;
            bottom: 10px;
            position: relative;
            font-size: 40px;
            font-family: 'Times New Roman', Times, serif;
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
        <div>
            <form action="confirmarNombreMateria.php" method="POST" id="mango">
                <legend>EDITA CLASE</legend>
                <input type="text" placeholder="NOMBRE DE LA CLASE" name="nombreNuevo" value="<?php echo $nombreCurso ?>"><br><br>
                <input type="text" placeholder="CODIGO" readonly name="codigo" value="<?php echo $codigoCurso ?>"><br><br><br><br>
                <label for="" name="id" hidden></label>
            
                <input type="Submit">
            </form>
        </div>
    </center>

    <script>

            $("#mango").validate({
                rules: {
                    Nombre: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
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
                        maxlength: "No debe pasar de 20 letras"
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


