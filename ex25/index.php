<?php

    function verificar($x) {
        if(is_int($x)) {
            $result = $x * 2;
            if ($result > 100) {
                echo "$result é maior que 100";
            } else {
                echo "$result não é maior que 100";
            }
        } else {
            echo "não é um número";
        }
    }

    verificar("44");