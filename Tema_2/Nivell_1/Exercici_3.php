<?php

    $X = 3;
    $Y = 7;
    $N = 4.5;
    $M = 2.4; 

    echo "La suma de " . $X . " y " . $Y . " es igual a : " . ($X + $Y). "\n";
    echo "La resta de " . $X . " y " . $Y . " es igual a : " . ($X - $Y). "\n";
    echo "La multiplicación de " . $X . " por " . $Y . " es igual a : " . ($X * $Y). "\n";
    echo "El modulo de " . $X . " entre " . $Y . " es igual a : " . ($X % $Y). "\n";


    echo "La suma de " . $N . " y " . $M . " es igual a : " . ($N + $M). "\n";
    echo "La resta de " . $N . " y " . $M . " es igual a : " . ($N - $M). "\n";
    echo "La multiplicación de " . $N . " por " . $M . " es igual a : " . ($N * $M). "\n";
    echo "El modulo de " . $N . " entre " . $M . " es igual a : " . ($N % $M). "\n";

    echo "El doble de " . $X . " es: " . ($X * 2). "\n";
    echo "El doble de " . $Y . " es: " . ($Y * 2). "\n";
    echo "El doble de " . $N . " es: " . ($N * 2). "\n";
    echo "El doble de " . $M . " es: " . ($M * 2). "\n";

    echo "La suma de todas las variables es: ". ($X + $Y + $N + $M). "\n"; 
    echo "La multiplicación de todas las variables es: ". ($X * $Y * $N * $M). "\n"; 



    function calcular($num1, $num2, $operacion) {
        switch ($operacion) {
            case '+':
                echo $num1 + $num2;
            case '-':
                echo $num1 - $num2;
            case '*':
                echo $num1 * $num2;
            case '/':
                echo $num1 / $num2;
            default:
                return "Operación no válida, escoge entre: +, -, * o /.";
        }
    }

?>
