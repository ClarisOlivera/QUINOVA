<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
:root { --footer-height: 120px; }
footer,
.footer,
#footer,
.site-footer,
.main-footer {
  position: relative;  
  z-index: 9999;          
}

/* Evitar que los bloques creen un stacking context más alto */
#bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
  position: relative;
  z-index: 1;              /* mucho más bajo que el footer */
  will-change: transform;
}

/* Mantener hover sin elevar z-index (no deben tapar el footer) */
#bloque2:hover, #bloque3:hover, #bloque4:hover, #bloque5:hover, #bloque6:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 22px rgba(0,0,0,0.2);
  z-index: 1;
}

main {
  /* Añade suficiente padding-bottom si tu footer es fixed */
  padding-bottom: calc(var(--footer-height) + 20px);
}

   body{
    background-color: antiquewhite;
    font-family: 'Georgia', serif;
    line-height: 1.6;
   }

   /* Imagen principal */
   #img1{
        height: 560px;
        width: 90%;
        display: block;
        margin: 5% auto 2% auto;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.3);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    #img1:hover{
        transform: scale(1.03);
        box-shadow: 0 8px 20px rgba(0,0,0,0.5);
    }

    /* Título principal */
    #titulo-resena {
        color: rgb(206, 160, 0);
        font-size: 50px;
        text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
        text-align: center;
        margin: 30px 0;
        animation: aparecer 1.5s ease-in-out;
    }

    /* Animación de entrada */
    @keyframes aparecer {
        from {opacity: 0; transform: translateY(-30px);}
        to {opacity: 1; transform: translateY(0);}
    }

    /* Primer texto introductorio */
    #texto1{
        margin: 20px auto 50px auto;
        font-size: 22px;
        text-align: center;
        max-width: 85%;
        padding: 15px;
        background: rgba(255, 255, 255, 0.7);
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    /* Bloques con imagen y texto */
    #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        padding: 50px 20px;
        max-width: 90%;
        margin: 40px auto;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 18px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    #bloque2:hover, #bloque3:hover, #bloque4:hover, #bloque5:hover, #bloque6:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 22px rgba(0,0,0,0.2);
    }

    /* Imágenes dentro de los bloques */
    #img2, #img3, #img4, #img5, #img6 {
        height: 400px;
        width: 500px;
        border-radius: 20px;
        object-fit: cover;
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    #img2:hover, #img3:hover, #img4:hover, #img5:hover, #img6:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    }

    /* Texto de los bloques */
    #texto2, #texto3, #texto4, #texto5, #texto6 {
        font-size: 22px;
        text-align: justify;
    }

    #texto2 h1, #texto3 h1, #texto4 h1, #texto5 h1, #texto6 h1 {
        color: rgb(206, 160, 0);
        margin-bottom: 10px;
        font-size: 28px;
        transition: color 0.3s ease;
    }
    #texto2 h1:hover, #texto3 h1:hover, #texto4 h1:hover, #texto5 h1:hover, #texto6 h1:hover {
        color: goldenrod;
    }

    /* RESPONSIVE */
    @media (max-width: 900px) {
        #img1 {
            height: auto;
            width: 95%;
            margin-top: 5%;
        }
        #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
            max-width: 98%;
            flex-wrap: wrap;
            text-align: center;
           
        }
        #img2, #img3, #img4, #img5, #img6 {
            width: 90%;
            height: auto;
        }
        #titulo-resena {
            font-size: 36px;
        }
    }
    @media (max-width: 600px) {
        #titulo-resena {
            font-size: 28px;
        }
        #texto1, #texto2, #texto3, #texto4, #texto5, #texto6 {
            font-size: 18px;
        }
        #bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
            flex-direction: column;
            gap: 1rem;
            padding: 25px 10px;
        }
    }
    @media (max-width: 400px) {
        #titulo-resena {
            font-size: 20px;
        }
        #texto1, #texto2, #texto3, #texto4, #texto5, #texto6 {
            font-size: 14px;
        }
    }
header,
.cabecera,
#cabecera,
.site-header,
.main-header {

  position: relative;
  z-index: 9999;
}

#bloque2, #bloque3, #bloque4, #bloque5, #bloque6 {
  position: relative;
  z-index: 1;    
  will-change: transform;
}
#bloque2:hover, #bloque3:hover, #bloque4:hover, #bloque5:hover, #bloque6:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 22px rgba(0,0,0,0.2);
  z-index: 1;
}

    </style>
</head>
<?php include('../include/cabecera.php'); ?>
<body>
<main>
    <img src="../imagenescol/portada1.jpg" alt="" id="img1" >
    <div id="titulo-resena">Reseña Histórica</div>
    <div id="texto1">
        <center> La Unidad Educativa Elena Arze de Arze representa un pilar histórico en la educación femenina en Bolivia. <br>
        Nacida en una época en la que la mujer estaba relegada en materia educativa, esta institución emergió <br>
        como símbolo de progreso social, compromiso docente y visión transformadora. <br>
        A lo largo de más de siete décadas ha mantenido su firme propósito de formar ciudadanas íntegras, <br>
        con valores y preparación académica sólida.</center>
    </div>
   
    <!-- Bloques -->
    <div id="bloque2">
        <img src="../imagenescol/portada2.jpg" alt="" id="img2" >
        <div id="texto2">
            <h1>📜 Fundación e impulso inicial</h1>
            <p>EEn diciembre de 1946 se inicia una nueva etapa en la educación cochabambina con la apertura del libro de inscripciones
                 para un liceo destinado exclusivamente a señoritas La idea se concreta gracias a la visión del Jefe del Distrito Escolar Prof Humberto Camacho
                  quien percibe la urgencia de abrir espacios de formación para mujeres en un sistema tradicionalmente excluyente La institución se denomina
                   inicialmente Liceo Adela Zamudio Anexo en honor a la destacada escritora y defensora de los derechos de la mujer Se alquila un local adecuado para
                   iniciar las labores escolares marcando el inicio de un proyecto que pronto superará todas las expectativas.
                 Este nacimiento se considera un acto audaz y revolucionario dentro del contexto conservador de la época.</p>
        </div>
    </div>

    <div id="bloque3">
        <div id="texto3">
            <h1>👩‍🏫 Comienzos del Liceo de Señoritas</h1>
            <p>El 2 de febrero de 1947 se lleva a cabo la inauguración oficial del Liceo de Señoritas La profesora Elena Arze de Arze es nombrada directora
                y asume el reto con firmeza y vocación En su primer año académico se inscriben 254 alumnas con una estructura que incluye tres primeros grados
                 un segundo un tercero y un cuarto Se establece una mística de formación en el esfuerzo la disciplina
                 y la superación personal En 1949 se gradúa la primera promoción marcando el inicio de una tradición educativa de excelencia.</p>
        </div>
        <img src="../imagenescol/portada3.jpg" alt="" id="img3" >
    </div>

    <div id="bloque4">
        <img src="../imagenescol/portada4.jpg" alt="" id="img4" >
        <div id="texto4">
            <h1>🏛️ Consolidación de identidad</h1>
            <p>Este nacimiento se considera un acto audaz y revolucionario dentro del contexto conservador de la épocaEl 22 de septiembre de 1947 el liceo
                 adopta el nombre de Liceo de Señoritas Cochabamba fortaleciendo su vínculo con la ciudad y su identidad local La accesibilidad se convierte
                  en una de sus principales características abriendo las puertas a estudiantes provenientes de distintas clases sociales El esfuerzo del cuerpo
                 docente y administrativo consolida su carácter fiscal lo que permite ofrecer una educación de calidad al alcance de muchas familias Se convierte
                 en un referente no solo educativo sino también social y cultural.</p>
        </div>
    </div>

    <div id="bloque5">
        <div id="texto5">
            <h1>🕊️ Elena Arze de Arze y su legado</h1>
            <p>La profesora Elena Arze de Arze asume con entrega absoluta la dirección del liceo convirtiéndose en su alma mater Su liderazgo trasciende lo administrativo y
                se convierte en un símbolo de lucha por el reconocimiento de la educación femenina Su empeño por conseguir una infraestructura propia para la institución refleja
                su compromiso incansable con la causa educativa Fallece el 15 de junio de 1958 como resultado de su abnegación dejando una huella imborrable en la memoria institucional
                En 1960 se rinde homenaje a su vida renombrando la institución como Liceo Nacional de Señoritas Elena Arze de Arze perpetuando su legado en cada generación.</p>
        </div>
        <img src="../imagenescol/portada5.jpg" alt="" id="img5" >
    </div>

    <div id="bloque6">
        <img src="../imagenescol/portada6.jpg" alt="" id="img6" >
        <div id="texto6">
            <h1>📘 Etapa moderna</h1>
            <p>Con el cambio de milenio la institución se adapta a los nuevos tiempos y el Ministerio de Educación y Culturas actualiza su denominación
                 Pasa a llama rse Unidad Educativa Elena Arze de Arze manteniendo intactos sus principios pero adaptándose a los desafíos contemporáneos
                Cuenta con la Resolución N° 3682/2000 que le otorga validez legal y el Código SIE 80980014 que la identifica en el sistema educativo nacional
                Su edificio escolar figura bajo el Código Escolar 80980341 lo que garantiza transparencia y reconocimiento oficial Continúa desarrollando una
                propuesta educativa integral centrada en valores identidad cultural y excelencia académica.</p>                                                  
        </div>
    </div>
</main>
<?php include('../include/footer.php'); ?>
</body>
</html>