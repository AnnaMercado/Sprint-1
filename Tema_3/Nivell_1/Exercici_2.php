<?php
    $X = array (10, 20, 30, 40, 50, 60);
    echo "La mida del array es: " . count($X). ". \n"; 

    unset($X[3]);

   $X = array_values($X);
   echo "La mida del array una vez se ha eliminado un elemento es: " . count($X) . "."; 


?>