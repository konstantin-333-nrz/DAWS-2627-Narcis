<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
     <style>
        body {
            margin: 40px;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            line-height: 1.8;
        }

        hr {
            margin: 25px 0;
            border: 0;
            border-top: 2px solid gray;
        }
    </style>
</head>
<body>
    <?php
        for($cont = 1; $cont <= 100 ; $cont++){
            echo $cont . ", ";
        }
    ?>
    <hr>
    <br>
    <h1>Este contador va del 10 al 0 :</h1>
    <?php
        echo $cont;
    ?>
            
        
   
</body>
</html>