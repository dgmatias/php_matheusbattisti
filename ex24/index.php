<?php

    function verificar($x) {
        if (is_string($x)) {
            echo "$x é do tipo string <br>";
        } else {
            if (is_int($x)) {
                echo "$x é do tipo int <br>";
            } else {
                if (is_bool($x)) {
                    echo "$x é do tipo boolean <br>";
                } else {
                    echo "tipo não encontrado";
                }
            }
        }
    }

    verificar("João");
    verificar(10);
    verificar(true);
    verificar([1, 2 ,3 ,4]);