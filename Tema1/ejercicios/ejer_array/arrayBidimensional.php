<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimensional</title>
</head>
<body>
    <h1>Array Bidimensional</h1>
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

        $valorMax = $numeros[0][0];
        $valorMin = $numeros[0][0];
        $filaMax = 0;
        $filaMin = 0;
        $colMax=0;
        $colMin=0;

        for($i = 0; $i < FILAS; $i++){
            for($j = 0; $j < COLUMNAS; $j++){
                if($numeros[$i][$j] > $valorMax){
                    $valorMax = $numeros[$i][$j];
                    $filaMax = $i;
                    $colMax = $j;
                }

                if($numeros[$i][$j] < $valorMin){
                    $valorMin = $numeros[$i][$j];
                    $filaMin = $i;
                    $colMin = $j;
                }
            }
        }    
    ?>
    <table>
        <?php for($i = 0; $i < FILAS ; $i++){?>
        <tr>
            <?php 
                for($j = 0 ; $j < COLUMNAS; $j++){
                    $valor = $numeros[$i][$j];

                    if($j == $colMax){
                        $color = "blue";
                    }elseif($i == $filaMin){
                        $color = "green";
                    }else{
                        $color = "black"
                    }

                    echo "<td style='color: " . $color . ";'>" . $valor . "</td>"
                }
            ?>
        </tr>
    <?php }?>
    </table>
</body>
</html>