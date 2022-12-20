<?php

    function verificar($x, $y, $nome, $nome2) {
        if ($x > $y OR $nome === $nome2) {
            echo "verdadeiro";
        } else {
            echo "falso";
        }
    }

    verificar(12, 5, "João", "Fred");