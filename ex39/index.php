<?php

    $array = [
        "item1" => 20,
        "item2" => 9,
        "item3" => 11,
        "item4" => 15,
        "item5" => 7,
    ];

    function itemsCaros($array) {
    
        $arrItemCaros = [];

        foreach($array as $item => $preco) {

            // echo "$item "; imprimindo os dados como teste
            // echo "$preco <br>"; imprimindo os dados como teste

             if ($preco > 10) {

                array_push($arrItemCaros, $item); // eu envio para o arrItemCaros os valores dos items

             }

        }

        // print_r($arrItemCaros);

        return $arrItemCaros; 
    }
    
    print_r(itemsCaros($array));