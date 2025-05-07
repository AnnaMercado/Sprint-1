<?php
    $students = [
        "Anna" => [7, 8.5, 9, 6, 7.5],
        "Marc" => [5, 6.5, 7, 5.5, 6],
        "Júlia" => [9, 9.5, 10, 8.5, 9],
        "Pau" => [4, 5, 6, 5.5, 4.5]
    ];

    function printAverages($students) {
        $total = 0;
        $count = 0;

        foreach ($students as $name => $grades) {
            $avg = array_sum($grades) / count($grades);
            echo "$name: " . round($avg, 2) . "\n";
            $total += array_sum($grades);
            $count += count($grades);
        }

        $classAverage = $total / $count;
        echo "Class average: " . round($classAverage, 2) . "\n";
    }

    printAverages($students);
?>
