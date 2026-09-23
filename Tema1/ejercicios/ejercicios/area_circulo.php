<?php
//Creación de la logica del ejercicio
    define('PI', 3.14159);
    $radio = 3.5;
    $area = PI * $radio * $radio;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del círculo</title>
    <style>
        body {
            margin: 0;
            padding: 60px 20px;
            background-color: #f4f4f4;
            color: #202124;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin: 0 auto;
            padding: 25px;
            background-color: #ffffff;
            border: 2px solid #202124;
            font-size: 26px;
        }
    </style>
</head>
<body>
    //Imprime directamente el resultado
    <h1>El área del círculo con radio <?php echo $radio; ?> es <?php echo $area; ?></h1>
</body>
</html>