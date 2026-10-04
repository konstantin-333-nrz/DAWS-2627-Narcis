<?php
    $frase = "Fiona es muy guapa y la quiero mucho";
    $palabrasToltales = 0;

    trim($frase);

    if(isset($frase)){

        for($i=1; $i<strlen($frase); $i++){
            if($frase[$i] == " "){
                $palabrasTotales++;
            }
        }
    }

    print "<h2> Hay un total de " . $palabrasToltales . " palabras en la frase </h2>";
    
    


?>