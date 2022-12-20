<?php

    function verificar1($x, $y) {
        if ($x > $y) {
            echo "$x é maior que $y <br>";
        } else {
            echo "$x nao é maior que $y <br>";
        }
    }

    function verificar2($x, $y) {
        if ($x !== $y) {
            echo "$x é diferente de $y <br>";
        } else {
            echo "$x nao é diferente de $y <br>";
        }
    }

    function verificar3($x, $y) {
        if ($x < $y) {
            echo "$x é menor que $y <br>";
        } else {
            echo "$x nao é menor que $y <br>";
        }
    }

    verificar1(5, 2);
    verificar2("João", "Miguel");
    verificar3(1, 2);