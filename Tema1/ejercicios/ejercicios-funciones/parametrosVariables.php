<?php
    function mayor() {
        $numeros = func_get_args();
        $mayor = $numeros[0];

        foreach ($numeros as $num) {
            if ($num > $mayor) {
                $mayor = $num;
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
    <title>Mayor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding: 40px;
        }

        h1 {
            display: inline-block;
            background: #333;
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1><?php echo "El mayor es: " . mayor(7, 12, 56, 46, 12, 89); ?></h1>
</body>
</html>