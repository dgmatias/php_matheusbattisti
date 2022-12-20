<?php

    $array = [];

    function criarArray($y) {

        for ($i = 1; $i <= $y; $i++) {
            global $array;
            array_push($array, $i);
            print_r($array);
        }

    }

    criarArray(20);
