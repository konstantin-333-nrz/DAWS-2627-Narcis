<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba if</title>
</head>
<body>
    <?php
        $nota1= 7.132;
        $nota2= 7.3;
        $mayor;

        if($nota1 > $nota2){
            $mayor = $nota1;
        }else {
            $mayor = $nota2;
        }
    ?>
    <h1>La mayor nota de la clase es : <?php echo $mayor; ?></h1>

</body>
</html>