<?php
    function encontrar_Caracter($palabras, $caracter){
        $numero_Palabras = count($palabras);

        for ($i = 0; $i < $numerode_palabras; $i++){
            if (strpos($palabras[$i], $caracter) === false) {
                return false;
            }
        }
        return true;

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