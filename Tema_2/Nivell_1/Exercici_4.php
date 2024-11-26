<?php

$numero_Final= 34;
$intervalo = 2; 

function contar($num_Final = 10, $intervalo = 1){
    if ($intervalo <= 0){
        echo "El intervalo ha de ser como mínimo de 1 en 1.";
    }

    echo "Contador del 1 al ". $num_Final . " contando en intervalos de ". $intervalo . ". \n";
    for ($i = 1; $i <= $num_Final; $i += $intervalo){
        echo $i . "\n";
    }
}
contar($numero_Final, $intervalo);
contar();


?>