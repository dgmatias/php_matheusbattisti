<?php

    $array = [10, 20, 30 , 40, 50, 60, 70, 80, 90, 100];

    function repetir() {
        global $array;
        $i = 0;

        while($i < count($array)) {

            if ($array[$i] === 30 OR $array[$i] === 40) {
                echo "Pulando etapa <br>";
                $i++;
                continue;
            }

            echo "$array[$i] <br>";
            $i++;
        }
    }

    repetir();