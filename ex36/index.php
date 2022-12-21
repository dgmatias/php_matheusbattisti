<?php

    $array = [];

    function criarArray($x) {
        global $array;
        
        for ($i = 0; $i < $x; $i++) {
            if ($i > 7) {
                array_push($array, $i);
                echo "array[$i] <br>";
            }
        }

    }

    criarArray(10);