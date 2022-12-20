<?php

    $array = [];

    function criarArray($qnt) {
        global $array;
        
        for ($i = 0; $i <= $qnt; $i++) {
            array_push($array, $i);
            if ($array[$i] % 2 !== 0) {
                echo "$array[$i] <br>";
            } 
        }
    }

    criarArray(10);