<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <form method = "post">

   <input type="text" placeholder="Introduce tu frase" method="post" name="frase">
   <button type="submit">Analizar</button> 
   <?php include("analizadorLogica.php");?>
    
    </form>
</body>
</html>