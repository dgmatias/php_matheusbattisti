<?php

    function verificar($velocidade) {
        if ($velocidade < 40) {
            echo "você está na velocidade correta <br>";
        } else { 
            if($velocidade === 40) {
                echo "Tome cuidado <br>";
            } else {
                echo "Você está rapido de mais, pare imediatamente <br>";
            }
        }
    }

    verificar(39);
    verificar(40);
    verificar(41);
