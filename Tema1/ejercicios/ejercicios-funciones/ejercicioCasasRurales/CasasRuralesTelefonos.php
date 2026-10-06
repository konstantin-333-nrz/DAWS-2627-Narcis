<?php
  $ruta = __DIR__ . "/casas_rurales.csv";
  $fichero = fopen($ruta, "r");
  $casasDescartadas=0;
  if(!$fichero){
    die("No se ha podido abrir el archivo");

  }else{ 
    echo "<table border='1'>";
    while(!feof($fichero)){
        $linea = fgets($fichero);
        $elementosLinea = explode(";", $linea);

        $campos = [$elementosLinea[0], $elementosLinea[1], $elementosLinea[3], $elementosLinea[9]];

        if($campos[3] !== ""){
            echo "<tr>";
                foreach($campos as $campo){
                    echo "<td>" . $campo . "</td>";
                }
            echo "</tr>";
        }else{
            $casasDescartadas++;
        }
        
    }
    echo "</table>";

    fclose($fichero);
  }

  echo "<h2>El numero de casas descartadas por no tener telefono es de: " . $casasDescartadas . "</h2>"; 
?>