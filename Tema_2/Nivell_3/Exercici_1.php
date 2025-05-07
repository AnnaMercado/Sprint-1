<?php
    function createList(int $limit): array
    {
        $values = [];

        for ($i = 2; $i <= $limit; $i++) {
            $values[] = $i;
        }

        return $values;
    }

    function getPrimes(int $max): array
    {
        $candidates = createList($max);
        $position = 0;

        while ($candidates[$position] * $candidates[$position] <= $max) {
            $currentPrime = $candidates[$position];

            foreach ($candidates as $key => $num) {
                if ($num !== $currentPrime && $num % $currentPrime === 0) {
                    unset($candidates[$key]);
                }
            }

            $candidates = array_values($candidates);
            $position++;
        }

        return $candidates;
    }

    print_r(getPrimes(20));
