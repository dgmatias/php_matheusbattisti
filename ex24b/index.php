<?php

    function verificar($peso) {
        if ($peso > 80) {
            echo "está pesado de mais";
        } else {
            echo "O peso está leve";
        }
    }

    verificar(81);