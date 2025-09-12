<?php
    $nombreServidor="localhost";
    $usuario="root";
    $password="";
    $basededatos="QUINOVA";

    $conexion= new mysqli($nombreServidor, $usuario, $password, $basededatos);

    if($conexion->connect_error){
        echo "Hubo un error ";
    }
        $sql="SELECT *FROM datos";

        $resultado=$conexion->query($sql);
        if($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                echo $fila['id']." ".$fila['NombreCompleto']." ".$fila['Fechadenacimiento']." ".$fila['Curso']." ".$fila['Paralelo']." ".$fila['Codigorude']." ".$fila['Carnetdeidentidad']." ".$fila['telefono']." ".$fila['direccion']." ".$fila['rol'];
                $id=$fila['id'];
                echo "<a href='formularioEditar.php?id=$id'><button>Editar</button></a>";
                echo "<a href='eliminarProducto.php?id=$id'><button>Eliminar</button></a>";
            }
    }
?>