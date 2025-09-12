<?php
    $nombreServidor="localhost" ;
    $usuario="root";
    $contraseña="" ;
    $basededatos="segundosprint";

    $conexion= new mysqli ($nombreServidor, $usuario, $contraseña,$basededatos) ;

        if ($conexion->connect_error){
            echo "Hubo un error :(";
        }
        $id=$_GET['i'] ;
        $sql1="SELECT * FROM informacion WHERE ci='$id'" ;
        $resultado1= $conexion->query($sql1);

if($resultado1->num_rows>0){
while ($fila=$resultado1->fetch_assoc () ){
    $id=$fila['ci'];
    $nombres=$fila['nombres'];
    $apellidos=$fila['apellidos'];
    $direccion=$fila['direccion'];
    $fecha=$fila['fechadenacimiento'];
    $telefono=$fila['telefono'];
    $curso=$fila['curso'];
    $ci=$fila['ci'];
    $rude=$fila['rude'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editar.php" method="post" id="caja">
        <label for="">Nombres:</label>
        <input type="text" name="nombres" value='<?=$nombres?>'><br>
        <label for="">Apellidos:</label>
        <input type="text" name="apellidos" value='<?=$apellidos?>'><br>
        <label for="">Direccion:</label>
        <input type="text" name="direccion" value='<?=$direccion?>'><br>
        <label for="">Fecha De Nacimiento:</label>
        <input type="DATE" name="fechadenacimiento" value='<?=$fecha?>'><br>
        <label for="">Telefono:</label>
        <input type="number" name="telefono" value='<?=$telefono?>'><br>
        <label for="">Curso:</label>
        <input type="text" name="curso" value='<?=$curso?>'><br>
        <input type="hidden" name="ci" value='<?=$ci?>'><br>
        <input type="Submit">
    </form>
    </body>
    </html>