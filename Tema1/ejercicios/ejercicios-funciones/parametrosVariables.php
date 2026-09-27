<?php 
    function mayor(){
        $numeros = func_get_arg();
        $mayor = $numeros[0]; 
        foreach($numeros as $num){
            if($num > $mayor){
                $mayor= $num;
            }
        }
        return $mayor;
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
    <h1><?php echo "El mayor es :" . mayor(7,12,56,46,12,89);?></h1>
</body>
</html>