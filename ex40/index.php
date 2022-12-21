<?php

    $frase = "O rato roeu a roupa do rei de Roma";
    
    // echo strlen($frase);

    function contarCaracter($texto, $caracter) {

        $qntCaracter = 0;
        
        for($i = 0; $i < strlen($texto) ; $i++) {

            // echo "$texto[$i] <br>";
            
            if($texto[$i] === $caracter) {
                $qntCaracter++;
            }
        }
        
        echo "a quantitade de caracteres encontrados foi de $qntCaracter";
    }

    contarCaracter($frase, "Roma");
    