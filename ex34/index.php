<?php 

    function verificar($x) {
        if ($x % 2 === 0) {
            echo "$x é um número par <br>";
        } else {
            echo "$x é um número impar <br>";
        }
    }

    verificar(2);
    verificar(3);