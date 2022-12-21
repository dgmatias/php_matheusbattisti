<?php

    $array = ["Diego", "Banana", "Jorge", "Moto"];

    function mesclar($x, $arr) {;
        echo implode($x, $arr);
    }

    mesclar(",", $array);