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
</head>
<body>
    <?php cuenta(10, 20)?>
</body>
</html>