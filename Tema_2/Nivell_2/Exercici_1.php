<?php



function calcularLlamada(int $minutos):void{
    $precio = 0.10 + ($minutos -= 3)*0.5;
    echo $precio;

}

calcularLlamada(135);

?>

