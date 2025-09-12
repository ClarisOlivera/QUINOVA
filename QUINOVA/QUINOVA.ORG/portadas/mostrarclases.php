<?php
include('../../db.php');

// Obtener el ID de la clase desde la URL
session_start();
$nombre=$_SESSION['nombre'];
$id=$_SESSION['ci'];

        $sql1="SELECT * FROM clases WHERE cuenta_User =$id";
        

        $resultado1=$conn->query($sql1);
        
        if($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                echo $fila1['codigo']." ".$fila1['nombre']." ".$fila1['cuenta_User'];
                $codigo=$fila1['codigo'];
                $_SESSION['codigo'] = $codigo;
                $nombreClase=$fila1['nombre'];
                $ci=$fila1['cuenta_User'];
                $id=$fila1['cuenta_User'];
                $sql2="SELECT *FROM cuenta WHERE user='$ci'";
                $resultado2=$conn->query($sql2);
                $fila2=$resultado2->fetch_assoc();
                echo $fila2['rol']." ".$fila2['contraseña']."<br>";
                echo "<a href='editarclase.php?i=$id'><button>Editar</button></a>";
                echo "<a href='eliminarclase.php?i=$id'><button>Eliminar</button></a>";
                echo "<br>";
            }
        }    
?>