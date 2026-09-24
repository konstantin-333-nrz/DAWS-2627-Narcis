<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1</title>
</head>
<body>
    <?php
       //Declaro el array y el numero random que asigno a la primera posición
        $array = array();
        $num_random = rand(0,99);
        $array[]= $num_random;
        //bucle para recorrer el array y ir generando numeros aleatorios 
        for($cont = 0 ; $cont < 50; $cont++){
            $num_random= rand(0,99);
            $repetido = false;

            //Bucle de comprobación de que los numeros no sean repetidos
            for($i = 0; $i < count($array); $i++){
                if($num_random == $array[i]){
                    $repetido = true;
                }
            }
            //Si es repetido se le resta uno al contador y se repite la accion de generar otro numero
            if($repetido){
                $cont--;
            }else{//SiNo si el numero no existe lo añade a la posición final del array
                $array[] = $num_random;
            }
        }
        //Borro las variables usadas anteriormente para que no haya problemas futuros
        unset($i)
        unset($cont);
        //Ordeno el array como solicita el ejercicio
        sort($array);

        //Creo 2 variables las cuales cuenten con el mayor y menor valor representables en el ejercicio 
        $mayor=0;
        $menor=99;
        //Creo una variable acumuladora para la suma de la media
        $suma=0;

        //Realización de un bucle para determinar el mayor el menor y la media del array
        for($i = 0 ; $i< count($array); $i++){
            
            if($array[$i] < $menor){
                $menor = $array[$i];
            }else if($array[$i] > $mayor){
                $mayor = $array[$i];
            }
            $suma += $array[$i];

    ?>  
    <ul>
    <?php 
        echo "<li>$array[$i]</li>" 
        
        }
        
        $media = $suma/$i;
    ?>
    </ul>
            

        

       
    
</body>
</html>