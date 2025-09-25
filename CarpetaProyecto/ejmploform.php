<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 2px solid;
            display: flex;
            justify-content: center;
            margin: 300px;
            margin-top: 0px;
        }
        #ptm{
            background: pink;
            color: rgb(253, 253, 253);
            transition: all 1s;
        }
        #ptm:hover{
            background: rgb(212, 140, 212);
            color:rgb(56, 64, 99);
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <table>
        <tr id="ptm">
            <th>Nombre:</th>
            <th>Apellido:</th>
            <th>Acciones:</th>
        </tr>
        <tr>
            <td>Carlos</td>
            <td>Urquizu</td>
            <td> <a href="">Ver</a>/ <a href="">Eliminar</a></td>
        </tr>
        <tr>
            <td>Daira</td>
            <td>Ramirez</td>
            <td> <a href="">Ver</a>/ <a href="">Eliminar</a></td>
        </tr>
        <tr>
            <td>Andrws</td>
            <td>Ortiz</td>
            <td> <a href="">Ver</a>/ <a href="">Eliminar</a></td>
        </tr>
    </table>
    <form method="post" action="ejemplo.php">
        <label for="">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="">Descripcion</label>
        <textarea name="textito"></textarea><br>
        <input type="submit">
        <input type="reset">
    </form>
    <script>
        $("form").validate();
        rules:{
            nombre:required;
        }
        
    </script>
</body>
</html>