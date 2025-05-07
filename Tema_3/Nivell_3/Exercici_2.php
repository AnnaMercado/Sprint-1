<?php
    $foodItems = ["apple", "banana", "orange", "cherry", "kiwi", "grape", "potato", "lettuce"];

    function isEven(String $word) {
        return strlen($word) % 2 == 0;
    }

    $evenLengthFood = array_filter($foodItems, 'isEven');

    echo "Food items with even length:\n";
    print_r($evenLengthFood);
?>
