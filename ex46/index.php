<?php

    $array = [
        [1,2,3,4],
        [2,3,4,5],
        [3,4,5,6],
    ];

    // echo count($array);
    // print_r($array[0][0]);

    for ($i = 0; $i < count($array); $i++) {
        
        echo "Imprimindo array externo" . ($i + 1);

        for ($j = 0; $j < count($array[$i]); $j++) {
            
            echo $array[$i][$j] . "<br>";
        }

    }