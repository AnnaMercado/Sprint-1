<?php
    $array1 = [1, 3.5, 7, 2, 5.0, 10];
    $array2 = [3.5, 2, 8, 10, 12, 5];

    $intersection = array_intersect($array1, $array2);

    $merged = array_merge($array1, $array2);

    echo "Intersection of the arrays:\n";
    print_r($intersection);

    echo "Merged arrays:\n";
    print_r($merged);
?>
