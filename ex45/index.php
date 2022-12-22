<?php

    function criarArray($min, $max) {

        $array = range($min, $max);
        // print_r($array);

        foreach ($array as $number) {

            $number += 6;

            if ($number > 30) {
                echo "$number, é um valor bem alto <br>";
            } else {
                echo "$number, é um valor dentro do limite <br>";
            }
        }

    }

    criarArray(10, 45);