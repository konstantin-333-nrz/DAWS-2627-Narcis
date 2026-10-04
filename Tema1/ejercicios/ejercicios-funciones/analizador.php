<?php

    $frase = "Fiona es muy guapa y la quiero mucho";
    $palabrasTotales = 1;
      if(isset($frase)){

        for($i=0; $i<strlen($frase); $i++){
            if($frase[$i] == " "){
                $palabrasTotales++;
            }
        }

        print "<h2> Hay un total de " . $palabrasTotales . " palabras en la frase </h2>";
      }
        
    
    


?>