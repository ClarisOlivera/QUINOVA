<?php
    $nombreServidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="segundosprint";

    $conexion= new mysqli($nombreServidor, $usuario, $password, $basededatos);

    if($conexion->connect_error){
        echo "Hubo un error ";
    }
        $sql1="SELECT *FROM informacion";
        $resultado1=$conexion->query($sql1);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: white;
        }
        div{
            background-color: lightgray;
            margin: 10px;
            padding: 10px;
            border-radius: 8px;
        }
        #estado{
            margin-top: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Lista de usuarios registrados</h1>
    <a href="../portadas/administrador.php">Volver</a>
<?php

        if($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                echo "<div>" . " Nombres: " .  $fila1['nombres']." ".$fila1['apellidos']." <br> Direccion ".$fila1['direccion']." <br> Fecha de nacimiento: ".$fila1['fechadenacimiento']." <br> Telefono: ".$fila1['telefono']." <br> Curso: ".$fila1['curso']." <br> CI: ".$fila1['ci']." <br> RUDE: ".$fila1['rude'] . "<br>";
                $ci=$fila1['ci'];

                $sql2="SELECT *FROM cuenta WHERE user='$ci'";
                
                $resultado2=$conexion->query($sql2);
                $fila2=$resultado2->fetch_assoc();
                echo $fila2['rol']." ".$fila2['contraseña']."<br>";
                $id=$fila1['ci'];
                if($fila2['bloqueado'] == 0){
                    echo "Cuenta activa";
                }else{
                    echo "Cuenta bloqueada";
                }
                echo "<br>";
                echo "</div>";
                echo "<div id='estado'>";
                echo "<a href='formularioEditar.php?ci=$id'>Editar</a>  ";
                if($fila2['bloqueado'] == 0){
                    echo " <a href='../cuartosprint/bloquearCuenta.php?ci=$id'>Bloquear Cuenta</a>";
                }else{
                    echo " <a href='../cuartosprint/desbloquearCuenta.php?ci=$id'>Desbloquear cuenta</a>";
                }
                echo " <a href='../cuartosprint/cambiarRoles.php?ci=$id'>Cambiar rol</a>";
                echo "</div>";
                echo "<br>";
            }
        }
?>  
</body>
</html>