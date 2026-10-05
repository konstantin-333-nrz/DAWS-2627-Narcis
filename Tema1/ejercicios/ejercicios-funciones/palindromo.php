<?php
    function esPalindromo(string $frase) : boolean
    {
        $frase= strtolower(str_replace(" ", "", $frase));
        $copiaFrase= "";
        
        for($i = strlen($frase)-1;$i>=0;$i--){
            $copiaFrase.= $frase[$i];
        }
        
        return $copiaFrase === $frase;    
        
    }
    
?>