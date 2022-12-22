<?php

    class Car {

        public $velocidade;

        function setVelocidade($velocidade) {
            return $this->velocidade = $velocidade;
        }

        function getVelocidade() {
            echo "a velocidade do carro é $this->velocidade km/h <br>";
        }
    }

    $palio = new Car();
    $palio->setVelocidade(70);
    $palio->getVelocidade();

    $ferrari = new Car();
    $ferrari->setVelocidade(150);
    $ferrari->getVelocidade();