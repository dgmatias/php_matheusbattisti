<?php

    $frase = "carro - navio - helicóptero - barco - jangada";

    function transformar($frase, $caracter = "-")  {
        $array = explode ($caracter, $frase);
        
        foreach ($array as $item) {
            echo "$item <br>";
        }

    }

    transformar($frase);