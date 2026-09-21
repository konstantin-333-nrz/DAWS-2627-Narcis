# **DAWS-2627**
## **Ejercicio 1**
Este es el ejercicio 1 que conta con un apartado para ver el nombre del creador del ejercicio practicando un saludo en php

![alt text](image-1.png)

## **Ejercicio 2**
Este es el ejercicio 2 que conta con un pequeño curriculum descriptivo con los idiomas que manejo y mis estudios de manera resumida.

![alt text](image-2.png)

## **Ejercicio 3**
Este es un ejercicio en el que podemos observar como se pueden crear constantes y operar con las mismas por ejemplo para calcular el área de una circunferencia.
![alt text](image-3.png)

## **Ejercicio 4**
```
<?php
    $num1 = 3;
    $num2 = 5;
    $num3 = 8;
    $num1 *= 4;
    
    echo $num1; --> Imprime 12
    echo $num1 <= $num2; --> Imprime false. 
    echo $num3 > $num1 and $num3 > $num2; --> Imprime false
    echo $num3 > $num1 or $num3 > $num2; --> Imprime true 
    echo $num1 > $num2 xor $num1 > $num3; --> Imprime false
    
    $num3--;
    echo $num3; --> Imprime 7
    
    $num3 += $num1;
    echo $num3; --> Imprime 19 
?>
``` 
La primera instrucción de echo que podemos ver en el fragmento de codigo imprimiria el numero 12 ya que en la variable $num1 vemos que se guarda el valor previo (3) multiplicado por 4