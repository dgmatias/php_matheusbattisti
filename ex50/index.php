<?php 

    $pessoa = [
        "nome1" => "Diego",
        "nome2" => "Davi",
        "nome3" => "Agatha",
        "nome4" => "Fred",
        "nome5" => "Erik",
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 50 </title>
</head>
<body>
    
    <table>
        <th>Nome</th>
        <tr>
            <td>
            <?php 
            
                foreach ($pessoa as $caracteristicas => $dados) {
                    echo "$dados <br>";
                }

            ?>
            </td>
        </tr>
    </table>


</body>
</html>