<?php

    function verificar($x, $y, $nome, $nome2) {
        if ($x > $y AND $nome === $nome2) {
            echo "verdadeiro";
        } else {
            echo "falso";
        }
    }

    verificar(5, 2, "João", "João");