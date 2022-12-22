<?php

    $nome = "Diego";
    $idade = 17;
    $profissao = "programador";

    $pessoa = compact("nome", "idade", "profissao");

    // print_r($pessoa);

    foreach ($pessoa as $informacoes => $dados) {
        echo "$informacoes: $dados <br>";
    }