<?php

    function repetir() {
        $i = 4;
        while ($i < 30) {
            echo "$i <br>";

            if ($i === 24) {
                echo "parando o loop";
                break;
            }

            $i += 2;
        }
    }

    repetir();