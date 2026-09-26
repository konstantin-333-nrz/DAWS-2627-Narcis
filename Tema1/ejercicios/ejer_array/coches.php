<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi garaje</title>
</head>
<body>
    <h1>Mi garaje</h1>
    <?php
        $matriculas = array(
            "7091BRZ" => array("Opel", "Astra", 3),
            "1011LSF" => array("Opel", "Astra", 5),
            "1235ANS" => array("Citroen", "C4", 5),
            "1111BDC" => array("Renault", "Clio", 3),
            "2909GJN" => array("Citroen", "Berlingo")
        );
            
        sort($matriculas);

        foreach($matriculas as $matricula){
            echo "<h1>" . $matricula . "</h1>";
        }

    ?>
</body>
</html>