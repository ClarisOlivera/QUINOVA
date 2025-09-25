<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        div {
            top: 15vh;
            position: relative;
            width: 13cm;
            padding: 1cm;
            border-radius: 20px;
            border: 5px solid #FFF6E5;
            background-color: rgba(255, 255, 255, 0.29);
        }

        input, textarea {
            background-color: #FFF6E5;
            color: #000000;
            width: 12cm;
            border-radius: 20px;
            height: 1cm;
            font-family: 'Times New Roman', Times, serif;
            left: 2cm;
        }

        input:hover, textarea:hover {
            background-color: #b9b9b9;
        }

        ::placeholder {
            color: #000000;
        }

        legend {
            color: #000000ff;
            text-align: left;
            bottom: 10px;

        }

        a {
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear nueva tarea</h1>
    <div>
        <form action="crearTarea.php" method="post">
            <input type="text" name="titulo" id="titulo" placeholder="Título de la tarea">
            <textarea name="descripcion" id="descripcion" placeholder="Descripción de la tarea"></textarea>
            <input type="text" name="tema" placeholder="Tema de la tarea">
            <input type="text" name="nota" placeholder="Nota de la tarea">
            <input type="submit" value="Crear Tarea">
        </form>
    </div>
</body>
</html>