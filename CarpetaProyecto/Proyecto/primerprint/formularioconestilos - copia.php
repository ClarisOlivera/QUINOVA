<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

</head>
<style>
   body {
        background-image: url("music-musical-instrument-guitar-two-dark-background.png");
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: beige;
        }
        #caja {
        display: flex;
        flex-direction: column;
        border-radius: 10px;
        border: 2px solid rgb(241, 241, 241);
        background: #1a1a1a;
        padding: 50px;
        text-align: center;
        width: 325px;
        height: auto;
        animation-name: hola;
        animation-duration: 4s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        
    }
    label.error {
            color: beige;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        #caja label {
           color: beige;
           font-size: 16px;
           text-align: left;
        }


</style>
<body>
    <form action="registro.php" method="post" id="caja">
        <label for="">Id del Usuario</label>
        <input type="number" name="i"><br>
        <label for="">Nombre Completo:</label>
        <input type="text" name="NombreCompleto"><br>
        <label for="">Fecha De Nacimiento</label>
        <input type="DATE" name="Fechadenacimiento"><br>
        <label for="">Curso</label>
        <input type="number" name="Curso"><br>
        <label for="">Paralelo</label>
        <input type="text" name="Paralelo"><br>
        <label for="">Codigo Rude</label>
        <input type="number" name="CodigoRude"><br>
        <label for="">Carnet De Identidad</label>
        <input type="text" name="Carnetdeidentidad"><br>
        <label for="">Telefono</label>
        <input type="number" name="telefono"><br>
        <label for="">Direccion</label>
        <input type="text" name="direccion"><br>
        <label for="">Rol</label>
        <label for="">Profesor</label><input type="radio" name="rol" value="profesor"><br>
        <label for="">Estudiante</label><input type="radio" name="rol" value="estudiante">
        <br>
        <input type="Submit">
    </form>
    <script>
       
        $("#caja").validate({
            rules: {
                i: {
                    required:true
                },
                NombreCompleto: {
                    required:true,
                    minlength:10,
                    maxlength:30
                },
                Fechadenacimiento: {
                    required:true
                },
                Curso: {
                    required:true,
                    digits:true,
                    minlength:1,
                    maxlength:1
                },
                Paralelo: {
                    required:true,
                    maxlength:1
                },
                CodigoRude: {
                    required:true,
                    digits:true,
                    minlength:8,
                    maxlength:25
                },
                Carnetdeidentidad: {
                    required:true,
                    digits:true,
                    minlength:5,
                    maxlength:10
                },
                telefono: {
                    required:true,
                    digits:true,
                    minlength:6,
                    maxlength:7
                },
                direccion: {
                    required:true,
                    minlength:10,
                    maxlength:30
                },
                rol: {
                    required:true,
                    
                }
            },
            messages: {
                i: {
                    required: " Llene este campo porfavor"
                },
                NombreCompleto:{
                    required: " Llene este campo porfavor",
                    minlength: "El mínimo de letras es 10",
                    maxlength: "El máximo de letras es 30"
                   
                },
                Fechadenacimiento: {
                    required: " Llene este campo porfavor"
                },
                Curso: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    maxlength: "El ingreso de digitos no debe de ser de mas de 1"
                },
                Paralelo: {
                    required: " Llene este campo porfavor",
                    maxlength: "El ingreso de digitos no debe de ser de mas de 1"
                },
                CodigoRude: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 8 digitos",
                    maxlength: "El codigo no debe de ser mayor a 25"
                },
                Carnetdeidentidad: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 5 digitos",
                    maxlength: "El codigo no debe de ser mayor a 10"
                },
                telefono: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 6 digitos",
                    maxlength: "El codigo no debe de ser mayor a 7"
                },
                direccion: {
                    required: " Llene este campo porfavor",
                    minlength: "El codigo debe de tener al menos 10 digitos",
                    maxlength: "El codigo no debe de ser mayor a 30"
                },
                rol:{
                    required: " Llene este campo porfavor",
                    minlength: "El mínimo de letras es 5",
                    maxlength: "El máximo de letras es 20"
                   
                }
                
            }
        });
</script>    
</body>
</html>