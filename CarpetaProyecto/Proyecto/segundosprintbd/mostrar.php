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
        
        if($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                echo $fila1['nombres']." ".$fila1['apellidos']." ".$fila1['direccion']." ".$fila1['fechadenacimiento']." ".$fila1['telefono']." ".$fila1['curso']." ".$fila1['ci']." ".$fila1['rude'];
                $ci=$fila1['ci']."<br>";
                $sql2="SELECT *FROM cuenta WHERE user='$ci'";
                $resultado2=$conexion->query($sql2);
                $fila2=$resultado2->fetch_assoc();
                echo $fila2['rol']." ".$fila2['contraseña']."<br>";
                $id=$fila1['ci'];
                echo "<a href='formularioEditar.php?i=$id'><button>Editar</button></a>";
                echo "<a href='cerrar.php?i=$id'><button>Cerrar</button></a>";
                echo "<br>";
            }
        }
    
?>
            