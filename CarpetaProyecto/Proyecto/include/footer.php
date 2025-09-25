<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        #inferior {
            background-color: #002855;
            height: 10%;
            bottom: 0;
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .valores {
            color: #ffffff;
            font-size: 45px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        }

        /* Corregido el media query */
        @media (max-width: 768px) {
            #inferior {
                flex-direction: column;
                height: auto;
                text-align: center;
                position: static;
            }
            .valores {
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <footer>
        <div id="inferior">
            <h4 class="valores">&copy; Colegio Elena Arze de Arze</h4>
        </div>
    </footer>
</body>
</html>