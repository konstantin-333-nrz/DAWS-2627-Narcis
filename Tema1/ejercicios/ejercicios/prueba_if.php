<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba if</title>
    <style>
        body {
            margin: 0;
            padding: 60px 30px;
            background-color: #f4f4f4;
            color: #202124;
            font-family: Georgia, serif;
        }
        
         h1 {
            max-width: 700px;
            margin: 0 auto 35px;
            padding: 25px 30px;
            background-color: #202124;
            border-bottom: 6px solid #5f6368;
            color: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 30px;
            text-align: center;
        }
    </style>
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