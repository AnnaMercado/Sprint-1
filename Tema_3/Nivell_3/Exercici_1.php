<?php
    $numbers = [1, 2, 3, 4, 5];

    $cubed = array_map(function($num) {
        return $num ** 3;
    }, $numbers);

    echo "Cubed values:\n";
    print_r($cubed);
?>
