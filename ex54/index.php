<?php

    class Pessoa {

        public $nome;
        public $idade;

        function saudacao($nome) {
            echo "Olá, meu nome é $nome <br>";
        }

        function idade($idade) {
            echo "Eu tenho $idade anos <br>";
        }

    }

    $diego = new Pessoa();
    $diego->saudacao("Diego");
    $diego->idade("17");
