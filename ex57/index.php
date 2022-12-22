<?php

    class Humano {

        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function getNome() {
            return $this->nome;
        }

        function getIdade() {
            return $this->idade;
        }

        function saudacao() {
            echo "Olá, meu nome é $this->nome e eu tenho $this->idade anos <br>";
        }

    }

    $diego = new Humano("Diego", 17);
    echo $diego->getNome() . "<br>";
    echo $diego->getIdade() . "<br>";
    $diego->saudacao();


