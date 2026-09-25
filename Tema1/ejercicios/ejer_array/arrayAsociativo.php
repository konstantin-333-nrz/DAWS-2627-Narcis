<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: linear-gradient(135deg, #020837 0%, #141940 25%, #0f0f17 100%);
            color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .contenedor {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(94, 234, 212, 0.5);
            border-radius: 18px;
            box-shadow: 0 0 25px rgba(94, 234, 212, 0.15);
            padding: 30px 25px;
        }

        h1 {
            text-align: center;
            margin: 0 0 15px 0;
            color: #ffffff;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px rgba(94, 234, 212, 0.8);
        }

        hr {
            width: 80%;
            border: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #5eead4, transparent);
            margin: 0 auto 25px auto;
        }

        .resultado {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .resultado h2 {
            background: rgba(30, 41, 59, 0.9);
            border: 1px solid rgba(94, 234, 212, 0.4);
            border-radius: 12px;
            padding: 18px 25px;
            margin: 0;
            font-size: 1.3rem;
            color: #e2e8f0;
            box-shadow: 0 0 15px rgba(94, 234, 212, 0.1);
        }
    </style>
</head>
<body>
    <?php
        $letras = array('M', 'F');
        $arrayCien = array();

        for ($i = 0; $i < 100; $i++) {
            $numRandom = rand(0, 1);
            $arrayCien[$i] = $letras[$numRandom];
        }

        $arrayContador = ['M' => 0, 'F' => 0];

        foreach ($arrayCien as $valor) {
            $arrayContador[$valor]++;
        }
    ?>

    <div class="contenedor">
        <h1>Ejercicio Array Asociativo</h1>
        <hr>
        <div class="resultado">
            <h2><?php echo "M => " . $arrayContador['M']; ?></h2>
            <h2><?php echo "F => " . $arrayContador['F']; ?></h2>
        </div>
    </div>
</body>
</html>