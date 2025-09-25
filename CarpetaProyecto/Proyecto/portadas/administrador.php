<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include('../../db.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: white;
        }
 
    </style>
</head>
<body>
    <h1>Hola administrador</h1>
    <p><?php echo $_SESSION['nombreCompleto']; ?></p>
    <a href="../segundosprintbd/mostrar.php">Ver todos los usuarios registrados</a>
    <a href="cerrarsesion.php">Cerrar sesión</a>
</body>
</html>