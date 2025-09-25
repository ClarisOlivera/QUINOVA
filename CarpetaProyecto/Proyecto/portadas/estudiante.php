<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="segundosprint";
    $conn=new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
      die("Conexion Fallida: ".$conn->connect_error);
    }

    $ci=$_SESSION['ci'];            // Carnet de identidad del estudiante
    $sql1="SELECT * FROM informacion WHERE ci = $ci ;";
    
    $resultado1 = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($resultado1) > 0){
        $fila1 = mysqli_fetch_assoc($resultado1);
    }
    
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
        h1 {
            color: #333;
        }
        h2 {
            color: #555;
        }
        div {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
        </style>    
</head>
<body>
    <div>
    <h1>Bienvenido Estudiante</h1>
    <h2>Nombre: <?php echo $fila1['nombres'] . " " . $fila1['apellidos']; ?></h2>
    <h2>Curso: <?php echo $fila1['curso']; ?></h2>
    <h2>Ci: <?php echo $fila1['ci']; ?></h2>
    </div>
    <div>
        <h2>Tus cursos</h2>
        <?php
        $sql2="SELECT * from registroclase WHERE cuenta_User = $ci ;";
        
        $resultado2 = mysqli_query($conn, $sql2);
        if(mysqli_num_rows($resultado2) > 0){
        
            while($fila2 = mysqli_fetch_assoc($resultado2)){
                $consultaMateria = "SELECT * FROM clases WHERE id = " . $fila2['clases_id'];
                if(mysqli_num_rows($resultado2) > 0){
                    $fila3 = mysqli_fetch_assoc(mysqli_query($conn, $consultaMateria));
                }

                echo "<p>Curso: <a href='materia.php?codigo=" . $fila3['codigo'] . "'>" . $fila3['nombre'] . "</a> - Codigo: " . $fila3['codigo'] . "</p>";
            }
        } else {
            echo "<p>No tienes cursos asignados.</p>";
        }
        
        ?>
        <a href="unirse.php">Unirse a un curso</a>
    </div>
    <div>
        <?php 
            echo "<a href='./cerrarSesion.php'>Cerrar Sesion</a>";
        ?>
    </div>
</body>
</html>