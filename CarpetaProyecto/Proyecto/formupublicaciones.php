<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        label{
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
        input{
            padding: 5px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form{
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <form action="publicaciones.php" method="post" enctype="multipart/form-data">
        <?echo $_SESSION['idClase'];?>
        <label for="">contenido</label>
        <input type="text" name="contenido"><br>
        <input type="file" name="fileToUpload" id="" required><br>
        <input type="submit" value="Enviar">

   </form>

</body>
</html>