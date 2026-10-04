<?php
    $frase = $_POST["frase"];
    
    function fraseDeImpares(string $frase) : stringfrr
    {   
        $nuevoString="";

        for($i = 0; $i<strlen($frase); $i++){
            
            if($i % 2  !== 0){
                $nuevoString.=$frase[$i];
            }
        }
        return $nuevoString;
    }

    echo "<h1>" . fraseDeImpares($frase) . "</h1>";
    
?>