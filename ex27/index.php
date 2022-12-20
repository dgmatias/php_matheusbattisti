<?php

    $array = [1, "string1", 2, "string2", 3, "string3", 4, "string4", 5, "string5"];

    function repetir() {
        global $array;
        $i = 0;
        while ($i < count($array)) {
            if (is_string($array[$i])) {
                echo "$array[$i] <br>";
            }
            $i++;
        }
    }

    repetir();