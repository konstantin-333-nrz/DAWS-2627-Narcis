<?php
    $frase = $_POST["frase"];

    if(isset($frase))
    {
         $cantidadPalabras = str_word_count($frase);
         $cantidadLetras=0;
         $palabras = str_word_count($frase, 1);

        foreach($palabras as $palabra){
            print "<h2> La palabra " . $palabra . " tiene un total de " . strlen($palabra) . " letras</h2><br>";
            $cantidadLetras += strlen($palabra);
        }
        
        print "<h3>La cantidad de palabras es de: " . $cantidadPalabras . " y cuenta con " . $cantidadLetras . " letras </h3>";
    }
    
     
?>