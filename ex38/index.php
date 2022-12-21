<?php

    function criarArray($qnt, $separador = ",") {

        $array = [];

        for ($i = 0; $i <= $qnt; $i++) {
           array_push($array, $i);
        }
        
        echo implode($separador, $array); 
    }

    criarArray(20);