<?php

    function igualdade($x, $y) {
        if($x == $y) {
            echo "$x e $y são iguais <br>";
        }
    }

    function diferenca($x, $y) {
        if($x != $y) {
            echo "$x e $y são diferentes <br>";
        }
    }

    function identico($x, $y) {
        if($x === $y) {
            echo "$x e $y são identicos <br>";
        }
    }

    function naoIdentico($x, $y) {
        if($x !== $y) {
            echo "$x e $y  não são identicos <br>";
        }
    }

    igualdade(5, 5);
    diferenca(4, 9);
    identico(9, 9);
    naoIdentico(3, 1);