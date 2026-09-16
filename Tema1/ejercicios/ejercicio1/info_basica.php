<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="info_basica.css">
</head>
<body>
    <?php
        $name = "Narcis Constantin Dragomir";
        $year= 2006;
    ?>
    <div id="contenedor">
        <p id= "parrafo">
            Hola me llamo <?php print $name;?> y nací el año <?php echo $year?>
        </p>
    </div>
</body>
</html>