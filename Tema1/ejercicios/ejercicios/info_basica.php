<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            margin: 0;
            padding: 60px 30px;
            background-color: #f4f4f4;
            color: #202124;
            font-family: Georgia, serif;
        }

        h1 {
            max-width: 700px;
            margin: 0 auto 35px;
            padding: 25px 30px;
            background-color: #202124;
            border-bottom: 6px solid #5f6368;
            color: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 30px;
            text-align: center;
        }

        #contenedor {
            max-width: 640px;
            margin: 0 auto;
            padding: 25px 30px;
            background-color: #ffffff;
            border-left: 6px solid #202124;
            box-shadow: 0 4px 10px #d9d9d9;
        }

        #parrafo {
            margin: 0;
            color: #5f6368;
            font-size: 20px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 1 - Narcis Dragomir</h1>
    <?php
        $name = "Narcis Constantin Dragomir";
        $year= 2006;
    ?>
    <div id="contenedor">
        <p id="parrafo">
            Hola me llamo <?php print $name;?> y nací el año <?php echo $year?>
        </p>
    </div>
</body>
</html>