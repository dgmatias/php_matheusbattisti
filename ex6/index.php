<?php

    $carro = [
        'modelo' => 'mustang', 
        'marca' => 'ford', 
        'dono' => 'Diego',
        'valor' => 100000,
        'combustivel' => 'hibrido'
    ];

    $modelo = $carro['modelo'];
    $marca = $carro['marca'];
    $dono = $carro['dono'];
    $valor = $carro['valor'];
    $combustivel = $carro['combustivel'];

    echo "O modelo do carro é $modelo, a marca é $marca, o dono se chama $dono, o valor é $valor e o tipo do combustivel é $combustivel";