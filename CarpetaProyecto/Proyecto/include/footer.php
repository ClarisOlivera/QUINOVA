<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             #inferior {
           background-color: rgb(40, 40, 100);
            height: 10%;
            bottom: 0;
            position:fixed;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
         .valores {
            color: bisque;
            font-size: 45px;
            text-align: center;
        }
         @media (max-width: 768px) 
           #inferior {
                flex-direction: column;
                height: auto;
                text-align: center;
                position: static;
            }


            .valores {
                font-size: 30px;
            }


    </style>
</head>
<body>
     <footer>
  <div id="inferior">
    <h4 class="valores">
      <p>&copy; Colegio Elena Arze de Arze</p>
    </h4>
  </div>
</footer>

</body>
</html>