<?php

    function transformar($x) {
        $result = (int) $x;
        echo "$result <br>";
    }

    transformar("adsads");
    transformar(12.9);
    transformar(5);
    transformar(true);
    transformar(false);
    transformar([1, 4]);
    transformar(["a", "b"]);
