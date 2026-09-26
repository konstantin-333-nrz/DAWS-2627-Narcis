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
            "2909GJN" => array("Citroen", "Berlingo", 3)
        );
            
        ksort($matriculas);

    ?>
    <table>
        <thead>
            <tr>
               <td>Matricula</td>
               <td>Marca</td>
               <td>Modelo</td>
               <td>Puertas</td>
            </tr>
        <thead>
        <tbody>
            <?php foreach($matriculas as $matricula => $datos){ ?>
            <tr>
                <td><?php echo $matricula;?></td>
                <td><?php echo $datos[0];?></td>
                <td><?php echo $datos[1];?></td>
                <td><?php echo $datos[2];?><td>
            </tr>
        </tbody>
    </table>
</body>
</html>