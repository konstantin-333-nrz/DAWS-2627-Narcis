<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo</title>
</head>
<body>
    <?php
        $letras = array('M', 'F');
        $arrayCien = array();

        for($i = 0 ; $i < 100 ; $i++){
            $numRandom = rand(0,1);
            $arrayCien[$i]= $letras[$numRandom];
        }

        $arrayContador = ['M' => 0 , 'F' => 0];

        foreach($arrayCien as $valor){
            $arrayContador[$valor]++;
        }
    ?>

    <h1>Ejercicio Array Asociativo </h1>
    <h2><?php echo "M=> " . $arrayContador['M'] ; ?></h2><br>
    <h2><?php echo "F=> " . $arrayContador['F'] ; ?></h2><br>
    
</body>
</html>