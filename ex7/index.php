<?php

    $pessoa = [
        'nome' => 'Diego Matias',
        'idade' => 17,
    ];

    if($pessoa['idade'] >= 18) {
        echo 'está habilitado a dirigir';
    } else {
        echo 'não está habilitado a dirigir';
    }