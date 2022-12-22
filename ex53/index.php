<?php

    class Cachorro {

        function latir() {
            echo "eu estou latindo humano, auauaua <br>";
        }

        function andar() {
            echo "humano, acredite eu estou caminhando <br>";
        }

    }

    $dogmal = new Cachorro();
    
    $dogmal->latir();    
    $dogmal->latir();           
    
    $dogbom = new Cachorro();

    $dogbom->andar();
    $dogbom->andar();