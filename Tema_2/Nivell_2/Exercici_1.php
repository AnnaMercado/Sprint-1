<?php

function calcularLlamada(int $minutos){
    $precio = 0.10; 

    for ($i = 3; $i < $minutos; $i++){
        $precio += 0.5;
    }
    echo $precio;

}

calcularLlamada(135);

?>

