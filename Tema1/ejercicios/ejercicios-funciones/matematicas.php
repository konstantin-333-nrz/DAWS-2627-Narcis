<?php
    //Devuelve la cantidad de dígitos de un número entero
    function digitos(int $num): int{
        return strlen(strval($num));
    }

    //Devuelve el dígito de un número entero en la posición indicada
    function digitoN(int $num, int $pos): int{
        return (int) strval($num)[$pos];
    }
    //Quita digitos por detras de un número entero
    function quitaPorDetras(int $num, int $cant) : int{
        for($veces = 0 ; $veces < $cant; $veces++){
            $num = (int) $num / 10;
        }
        return  $num;
    }
    //Quita digitos por delante de un número entero
    function quitaPorDelante(int $num, int $cant) : int{
        $numFinal=0;
        $cont = 1;

        for($veces = 0 ; $veces < $cant; $veces++){
            $numFinal += (int) ($num % 10) * $cont;
            $num = (int) $num / 10;
            $cont *= 10;
        }
        return $numFinal;
    }
?>