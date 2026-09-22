<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba if 2</title>
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
        $nota1=7.5;
        $nota2=7.51;
        $nota3=9.99;
        $mayor;

        if($nota1 > $nota2 && $nota1 > $nota3 ){
            $mayor = $nota1;
        }else if($nota2 > $nota1 && $nota2 > $nota3){
            $mayor = $nota2;
        }else{
            $mayor = $nota3;
        }

    ?>
    <h1> La mayor nota de las 3 es <?php echo $mayor; ?></h1>
</body>
</html>