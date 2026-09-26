<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Personas</title>
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