<?php


function calcularPreu(int $chocolate, int $xiclet, int $carmel){
   $preu = (calcularChocolate($chocolate) + calcularXiclet($xiclet) + calcularCarmel($carmel) );
   echo $preu; 


}

function calcularChocolate(int $chocolate): float{
    $chocolate *= 1;
    return $chocolate;
}
function calcularXiclet(int $xiclet): float{
    $xiclet *= 0.5;
    return $xiclet;
}
function calcularCarmel(int $carmel): float{
    $carmel *= 1.5;
    return $carmel;
}


calcularPreu(2, 1, 1);

?>