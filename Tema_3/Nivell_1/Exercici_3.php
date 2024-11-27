<?php
    function mismo_Caracter($palabras, $caracter){
        $coinciden = true;
        $tamaño_Array = count($palabras);

        for ($i = 0; $i < $tamaño_Array; $i++){
            if (strpos($palabras[$i], $caracter) === false) {
                $coinciden = false; 
                $i = $tamaño_Array;
            }
        }
        return $coinciden;

    }
    /*
    $palabras = ["html", "php", "hola"];
    $caracter = "l";

    $coinciden = mismo_Caracter($palabras, $caracter);

    if ($coinciden){
        echo "El caracter se encuentra en todas las palabras del array.";
    }
    else{
        echo "El caracter no se encuentra en todas las palabras del array.";
    }
    */
?>