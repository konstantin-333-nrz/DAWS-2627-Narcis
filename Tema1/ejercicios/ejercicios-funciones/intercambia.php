<?php
    function intercambia(&$a, &$b){
        $aux = $a;
        $a = $b;
        $b = $aux;
    }

    $numero1 = 10;
    $numero2 = 20;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercambia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .valor {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Intercambio de valores</h1>

        <p>Antes: <span class="valor"><?php echo $numero1; ?></span> y <span class="valor"><?php echo $numero2; ?></span></p>

        <?php intercambia($numero1, $numero2); ?>

        <p>Después: <span class="valor"><?php echo $numero1; ?></span> y <span class="valor"><?php echo $numero2; ?></span></p>
    </div>
</body>
</html>