<?php 
    function mayor(){
        $numeros = func_get_arg();
        $mayor = $numeros[0]; 
        foreach($numeros as $num){
            if($num > $mayor){
                $mayor= $num;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mayor de todos</title>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 30px;
                text-align: center;
            }

            h1 {
                display: inline-block;
                background-color: #444;
                color: white;
                padding: 10px 20px;
                margin: 5px;
                border-radius: 8px;
                
            }
    </style>
</head>
<body>
    <?php
        $numeros_random = array();

        for($i = 0 ; $i < 6; $i++){
            $numeros_random[$i]=rand(0,999);
        }

        for($i = 0; $i<count($numeros_random); $i++){
            echo "<h1>" . $numeros_random[$i] . "</h1>";
        }
    ?>
    <p><?php echo "El mayor es :" . mayor($numeros_random);?></p>
</body>
</html>