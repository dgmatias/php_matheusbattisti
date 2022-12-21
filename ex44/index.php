<?php

    $array = ['O', 'php', 'é', 'muito', 'bom'];

    function transformar($array, $caracter = ",") {
        $string = implode ($caracter, $array);
        echo $string;
    }

    transformar($array, " ");