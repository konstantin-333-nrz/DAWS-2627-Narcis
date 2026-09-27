<?php 
    function cuenta($inicio, $fin){
        for( $cont = $inicio; $cont <= $fin ; $cont++){
            echo "<h1>" . $cont . "</h1>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Contador</title>
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
    <?php cuenta(10, 20)?>
</body>
</html>