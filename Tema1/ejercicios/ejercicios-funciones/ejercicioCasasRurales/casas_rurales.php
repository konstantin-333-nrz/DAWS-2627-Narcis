<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas Rurales</title>
    <style>
       
        h1{
            text-align : center;
            font-family : sans-serif;

        }

        table{
             width: 80%;
             margin: 0 auto;
             border-collapse: separate;
             border-spacing: 0;
             border: 1px solid #000;
             border-radius: 10px;
             overflow: hidden;
        }
        

        tr:nth-child(odd){
            background-color: #ffffff;
        }

        tr:nth-child(even){
            background-color: #f9f9f9;
        }

        td{
            padding:10px;
            border-bottom:1px solid #ddd;
        }
        h2{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>AQUI VEMOS LAS CASAS RURALES CON TELEFONOS DISPONIBLES</h1>
    <?php include("CasasRuralesTelefonos.php");?>
</body>
</html>