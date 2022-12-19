<?php 

    function calcular($n1, $n2, $n3, $n4) {
        $total = ($n1 - $n2) * $n3 / $n4;
        echo "$total";   
    }

    calcular(20, 5, 2, 3);