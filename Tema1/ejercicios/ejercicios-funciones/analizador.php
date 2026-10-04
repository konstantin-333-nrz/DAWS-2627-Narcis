<?php
    $frase="Fiona es muy guapa y la quiero mucho";

    $palabras = explode(" ", $frase);
    $totalPalabras = count($palabras);
    $totalLetras = 0;

    foreach($palabras as $palabra){
        $tam= strlen($palabra);
        $totalLetras += $tam;
        print "<h2>Palabra: " . $palabra . " tiene un total de " . $tam . " letras </h2> <br>";
    }

    echo "<h2> La cantidad total de carácteres de la frase es ; " . $totalLetras .  " y cuenta con " . $totalPalabras .  " palabras </h2> <br>";
?>