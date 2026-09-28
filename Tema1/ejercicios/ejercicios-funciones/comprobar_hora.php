<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HORA VALIDA</title>
</head>
<body>
    <?php
        include("funciones_hora.php");
        $hora= "26:31:39";

        if(esHoraValida($hora)){
            echo "<h1>" . $hora . " es valida </h1>";
        }else{
            print "<h1>LA HORA (" . $hora  . " )NO ES VALIDA</h1>";
        }
    ?>
</body>
</html>