<?php

function selectionSort(array $numbers): array
{
    $length = count($numbers);

    for ($i = 0; $i < $length - 1; $i++) {

        $minIndex = $i;

        for ($j = $i + 1; $j < $length; $j++) {
            
            if ($numbers[$j] < $numbers[$minIndex]) {
                $minIndex = $j;
            }
        }

        $temp = $numbers[$i];
        $numbers[$i] = $numbers[$minIndex];
        $numbers[$minIndex] = $temp;

    }

    return $numbers;
}

print_r(selectionSort([9, 5, 7, 6, 1, 2, 4, 0, 3, 8]));
