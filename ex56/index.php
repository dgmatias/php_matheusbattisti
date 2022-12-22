<?php

    class Humano {

        public $nome;
        protected $salario;

        public function falar() {
            echo "Eu estou falando <br>";
        }

    }

    class Professor extends Humano {

        public function setSalario($valor) {
            return $this->salario = $valor;
        }

        public function getSalario() {
            return $this->salario;
        }

    }

    $herval = new Professor;
    $herval->falar();
    $herval->setSalario(3000);
    echo $herval->getSalario();