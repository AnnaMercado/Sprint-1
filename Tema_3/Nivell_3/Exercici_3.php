<?php
    $numbers = [2, 3, 4, 5, 6, 7, 8, 9, 10];

    function isPrime($num) {
        if ($num < 2) return false; 
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) return false; 
        }
        return true;
    }

    function sumOfPrimes($numbers) {
        return array_reduce($numbers, 'addIfPrime', 0);
    }

    function addIfPrime($sum, $num) {
        if (isPrime($num)) {
            $sum += $num;
        }
        return $sum;
    }

    $sumOfPrimesResult = sumOfPrimes($numbers);
    echo "The sum of the prime numbers is: $sumOfPrimesResult\n";
?>
