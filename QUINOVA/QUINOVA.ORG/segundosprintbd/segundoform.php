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
        <label for="">Nombres:</label>
        <input type="text" name="nombres"><br>
        <label for="">Apellidos:</label>
        <input type="text" name="apellidos"><br>
        <label for="">Direccion:</label>
        <input type="text" name="direccion"><br>
        <label for="">Fecha De Nacimiento:</label>
        <input type="DATE" name="fechadenacimiento"><br>
        <label for="">Telefono:</label>
        <input type="number" name="telefono"><br>
        <label for="">Curso:</label>
        <input type="text" name="curso"><br>
        <label for="">Codigo Rude:</label>
        <input type="number" name="rude"><br>
        <label for="">Carnet De Identidad:</label>
        <input type="text" name="ci"><br>
        <label for="">Rol</label>
        <label for="">Profesor</label><input type="radio" name="rol" value="profesor"><br>
        <label for="">Estudiante</label><input type="radio" name="rol" value="estudiante">
        <br>
        <label for="">Contraseña:</label>
        <input type="password" name="contra"><br>
        <input type="Submit">
    </form>
    <script>
       
        $("#caja").validate({
            rules: {
    
                nombres: {
                    required:true,
                    minlength:2,
                    maxlength:20
                },
                apellidos: {
                    required:true,
                    minlength:1,
                    maxlength:20
                },
                direccion: {
                    required:true,
                    minlength:5,
                    maxlength:30
                },

                Fechadenacimiento: {
                    required:true
                },
                telefono: {
                    required:true,
                    digits:true,
                    minlength:6,
                    maxlength:8
                },
                Curso: {
                    required:true,
                    minlength:1,
                    maxlength:10
                },
                ci: {
                    required:true,
                    digits:true,
                    minlength:5,
                    maxlength:10
                },
                rude: {
                    required:true,
                    digits:true,
                    minlength:8,
                    maxlength:25
                },
                rol: {
                    required:true,
                    
                },
                contra: {
                    required:true,
                    minlength:8
                }
            },
            messages: {
                i: {
                    required: " Llene este campo porfavor"
                },
                nombres:{
                    required: " Llene este campo porfavor",
                    minlength: "El mínimo de letras es 2",
                    maxlength: "El máximo de letras es 20"
                   
                },
                apellidos:{
                    required: " Llene este campo porfavor",
                    minlength: "El mínimo de letras es 1",
                    maxlength: "El máximo de letras es 20"
                },
                direccion: {
                    required: " Llene este campo porfavor",
                    minlength: "El codigo debe de tener al menos 5 digitos",
                    maxlength: "El codigo no debe de ser mayor a 30"
                },
                Fechadenacimiento: {
                    required: " Llene este campo porfavor"
                },
                telefono: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 6 digitos",
                    maxlength: "El codigo no debe de ser mayor a 7"
                },
                Curso: {
                    required: " Llene este campo porfavor",
                    maxlength: "El ingreso de digitos no debe de ser de mas de 1"
                },

                ci: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 5 digitos",
                    maxlength: "El codigo no debe de ser mayor a 10"
                },
                rude: {
                    required: " Llene este campo porfavor",
                    digits: "Por favor, ingresa solo números",
                    minlength: "El codigo debe de tener al menos 8 digitos",
                    maxlength: "El codigo no debe de ser mayor a 25"
                },

                rol:{
                    required: " Llene este campo porfavor"
                   
                },
                nombres:{
                    required: " Llene este campo porfavor",
                    minlength: "El mínimo de letras es 8"
                
                }
            }
        });
</script>    
</body>
</html>