<?php

    $array = ["maça", "uva", "pera", "abacaxi"];
    
    // $i = array_search("uva", $array);

    // echo "$i <br>";

    // $result = array_splice($array, $i);

    function removerItem($item, $array) {

        $i = array_search($item, $array);

        // echo "$i <br>";

        $result = array_splice($array, $i);

        print_r($result);

    }

    removerItem("abacaxi", $array);