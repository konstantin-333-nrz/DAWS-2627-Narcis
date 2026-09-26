<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo</title>
    <style>
        body {
            margin: 0;
            padding: 30px;
            background-color: #f2f2f2;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .contenedor {
            max-width: 700px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border: 1px solid #d1d1d1;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
        }

        h1 {
            margin: 0;
            text-align: center;
            color: #444;
            font-size: 2rem;
            font-weight: normal;
        }

        hr {
            width: 80%;
            margin: 20px auto;
            border: 0;
            border-top: 1px solid #cfcfcf;
        }

        .resultado {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .resultado h2 {
            min-width: 120px;
            margin: 0;
            padding: 15px;
            text-align: center;
            background-color: #eeeeee;
            border: 1px solid #cccccc;
            border-radius: 5px;
            color: #555;
            font-size: 1.2rem;
            font-weight: normal;
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