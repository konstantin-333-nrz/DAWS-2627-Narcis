<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi garaje</title>
    <style> 
        body {
                margin: 0;
                padding: 30px;
                background-color: #f2f2f2;
                color: #333;
                font-family: Arial, sans-serif;
            }

            h1 {
                text-align: center;
                color: #444;
                font-weight: normal;
            }

            table {
                width: 80%;
                margin: 20px auto;
                background-color: white;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 12px;
                text-align: left;
                border: 1px solid #ccc;
            }

            th {
                background-color: #ddd;
                color: #444;
            }

            tr:nth-child(even) {
                background-color: #f8f8f8;
            }
    </style>
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
            <?php }?>
        </tbody>
    </table>
</body>
</html>