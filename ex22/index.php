<?php

    function verificar($idade) {
        if ($idade >= 18) {
            echo "Você tem $idade anos, você alcançou a maioridade! <br>";
        } else {
            echo "Você tem $idade anos, você ainda não alcançou a maioridade! <br>";
        }
    }
    
    verificar(18);
    verificar(17);