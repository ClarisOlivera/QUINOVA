<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
    margin: 0;                                           /* Elimina el margen por defecto del navegador */
    padding: 0;                                          /* Elimina el padding por defecto del navegador */
    font-family: 'Poppins', sans-serif;                 /* Aplica la fuente 'Poppins' y si no está disponible, usa sans-serif */
}

#superior {
    display: flex;                                        /* Convierte el contenedor en flexbox */
    align-items: center;                                   /* Centra verticalmente los elementos dentro del flexbox */
    justify-content: space-between;                         /* Distribuye los elementos dejando espacio entre ellos */
    background-color: rgba(230, 158, 5, 1);              /* Color de fondo amarillo/naranja */
    padding: 15px 30px;                                    /* Espaciado interno: 15px arriba/abajo y 30px a los lados */
    position: fixed;                                       /* Fija el header en la parte superior de la pantalla */
    top: 0;                                                /* Coloca el contenedor en la parte más alta (pegado arriba) */
    width: 100%;                                            /* Ocupa todo el ancho de la pantalla */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);                 /* Sombra debajo del header para dar profundidad */
    z-index: 1000;                                          /* Asegura que el header esté por encima de otros elementos */
}

#logo {
    width: 80px;                                                   /* Ancho del logo */
    height: 80px;                                                    /* Alto del logo */
    border-radius: 50%;                                            /* Convierte la imagen en un círculo */
    animation: girar 10s linear infinite;                          /* Aplica la animación definida abajo, rotación infinita */
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);                        /* Le da una sombra al logo */
}

@keyframes girar { 
    100% { transform: rotate(360deg); }                    /* Define la animación: rota 360 grados */
}

#titulo {
    color: #ffffff;                                 /* Color del texto en blanco */
    font-size: 36px;                                 /* Tamaño de letra grande */
    margin: 0 20px;                                   /* Espaciado lateral de 20px */
    text-shadow: 1px 2px 4px rgba(0,0,0,0.4);       /* Sombra para resaltar el texto */
    flex-grow: 1;                                      /* Hace que el título ocupe todo el espacio disponible */
    text-align: left;                                 /* Alinea el título a la izquierda */
}

#paginas {
    display: flex;                         /* Convierte el contenedor de enlaces en flexbox */
    align-items: center;                     /* Centra los enlaces verticalmente */
    width: 100%;
}

#paginas a {
    text-decoration: none;                                      /* Quita el subrayado de los enlaces */
    color: #ffffff;                                         /* Texto de los enlaces en blanco */
    background-color: rgba(255,255,255,0.2);                /* Fondo semitransparente blanco */
    padding: 10px 20px;                                       /* Espaciado interno de los enlaces */
    margin-left: 10px;                                        /* Espaciado a la izquierda entre enlaces */
    border-radius: 8px;                                       /* Bordes redondeados */
    font-size: 18px;                                          /* Tamaño del texto */
    transition: all 0.3s ease;                                /* Transición suave al pasar el mouse */
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);                  /* Sombra leve para resaltar los botones */
}

#paginas a:hover {
    background-color: rgba(255,255,255,0.4);                         /* Fondo más claro al pasar el mouse */
    transform: translateY(-2px);                                        /* Mueve el botón hacia arriba un poco (efecto flotante) */
    box-shadow: 0 4px 6px rgba(0,0,0,0.3);                              /* Sombra más fuerte en hover */
}

/* Estilos para pantallas pequeñas (ej: celulares o tablets) */
@media (max-width: 768px) {
    #superior {
        flex-direction: column;                      /* Coloca los elementos en columna en lugar de fila */
        padding: 15px;                              /* Ajusta el padding */
        text-align: center;                       /* Centra el contenido */
    }

    #titulo {
        font-size: 36px;                       /* Mantiene el tamaño del título */
        margin: 0px 10px;                      /* Ajusta el margen lateral */
    }

    #paginas {
        display: flex;                                 /* Mantiene el contenedor de enlaces como flex */
        align-items: center;                          /* Centra verticalmente los enlaces */
        margin-left: 20px;                            /* Añade un poco de espacio a la izquierda */
    }

    #paginas a {
        margin: 5px 0;                              /* Reduce el margen entre enlaces */
        font-size: 16px;                           /* Disminuye el tamaño de letra para móviles */
    }
}
    </style>
</head>

<body>
     <header>
      <div id="superior">
              <img src="../imagenescol/logo.jpeg" alt="logo" id="logo">
            <h1 id="titulo">"Elena Arce"</h1>
            <nav id="paginas">
                <a href="principal.php">Principal</a>
                <a href="nosotros.php">nosotros</a>
                <a href="historia.php">historia</a>
                <a href="ambientes.php">ambientes</a>
                <a href="calendario.php">Calendario</a>
                <a href="contacto.php">Contacto</a>
                <a href="../segundosprintbd/primerform.php">Classroom</a>
            </nav>
        </div>
    </header>

</body>
</html>