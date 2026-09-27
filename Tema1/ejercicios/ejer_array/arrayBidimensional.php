<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimensional</title>
</head>
<body>
    <?php
        $numeros = array();
        define("FILAS", 6);
        define("COLUMNAS", 9);
        $numeros_repetidos= array();
        
        for($i= 0; $i< FILAS ; i++){
            for($j= 0; $j< COLUMNAS; j++){
                do{
                    $numero_random = rand(100,999);
                }while (isset($numeros_repetidos[$numero_random]))

                $numeros_repetidos[$numero_random]=true;
                $array[$i][$j] = $numero_random;
            }
        }
    
    ?>
</body>
</html>