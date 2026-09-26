<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Personas</title>
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
            font-size: 2rem;
            font-weight: normal;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            color: #555;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
</head>
<body>
    <?php
        $personas = [
            [
                'nombre' => 'Narcis Dragomir', 
                'altura' => '171 cm', 
                'email' => 'narcis.dragomir@ejemplo.com'
            ],

            [
                'nombre' => 'Fiona Kral',
                'altura' => '153 cm',
                'email' => 'fiona.kral@ejemplo.com'
            ],

            [
                'nombre' => 'Kivi Kral Dragomir',
                'altura' => '25 cm',
                'email' => 'kiwikrdra@ejemplo.com'
            ],

            [
                'nombre' => 'Pipicas',
                'altura' => '186 cm',
                'email' => 'pipicas@ejemplo.com'
            ],

            [
                'nombre' => 'Iuliana Carp',
                'altura' => '155 cm',
                'email' => 'iuliana.carp@ejemplo.com'
            ]
        ]

    ?>

    <h1>Tabla de Personas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Altura</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($personas as $persona){?>
            <tr>
                <td><?php echo $persona['nombre']?></td>
                <td><?php echo $persona['altura']?></td>
                <td><?php echo $persona['email']?></td>
            </tr>
            <?php }?>

        </tbody>
</body>
</html>