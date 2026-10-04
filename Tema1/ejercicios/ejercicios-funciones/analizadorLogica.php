<?php
    $frase=$_POST;

    $palabras = explode(" ", $frase);
    $totalPalabras = count($palabras);
    $totalLetras = 0;

    foreach($palabras as $palabra){
        $tam= strlen($palabra);
        $totalLetras += $tam;
        print "<h2>Palabra:<em>" . $palabra . "</em> tiene un total de " . $tam . " letras </h2> <br>";
    }

    echo "<h2> La cantidad total de carácteres de la frase es ; " . $totalLetras .  " y cuenta con " . $totalPalabras .  " palabras </h2> <br>";
?>