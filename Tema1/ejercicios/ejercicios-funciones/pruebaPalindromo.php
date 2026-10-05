<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <?php
        include("palindromo.php");
        $frase = "Anita lava la tina";
        
        if(esPalindromo($frase))
        {
            print "<h1> La frase " . $frase . " es Palindromo </h1>";

        }else{
            print "<h1> La frase " . $frase . "  NO es Palindromo </h1>";
        }
    ?>
</body>
</html>