<?php 

    $ranking = [
        "Diego" => 500,
        "Alan" => 100,
        "Camilly" => 300,
        "Guilherme" => 150,
        "Kayky" => 400,
        "João" => 90,
        "Poliana" => 230,
        "Kayo" => 330,
    ];

    asort($ranking);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 51 </title>
</head>
<body>
    
    <h1> Ranking </h1>

    <ol>
        <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <li> <?= $pessoa ?> -> <?= $pontuacao ?> pontos </li>
        <?php endforeach; ?>
    </ol>

</body>
</html>