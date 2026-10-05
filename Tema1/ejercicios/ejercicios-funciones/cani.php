<?php
    $frase = $_POST["frase"];
    if(isset($frase))
    {
        $fraseCani="";

        for($i=0;$i<strlen($frase);$i++)
        {
            if($i%2==0)
            {
                $letra=strtoupper($frase[$i]);
                $fraseCani.= $letra;
            }else{
                $letra= strtolower($frase[$i]);
                $fraseCani.=$letra;
            }
        }
        echo "<h1>" . $fraseCani . "</h1>";
    }

?>