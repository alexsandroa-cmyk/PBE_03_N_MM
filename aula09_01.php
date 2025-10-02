<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09_01</title>
</head>

<body>
    <h1>Aula 09_01 - 02/10/25</h1>
    <?php
    $idade = 17;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }
    echo "<br>"
    ?>
    <?php
    $hora = 15;
    if ($hora >= 0 && $hora <= 11) {
        echo "Bom dia!";
    } elseif ($hora >= 12 && $hora <= 18) {
        echo "Boa tarde!";
    } elseif ($hora <= 19 && $hora <= 18) {
        echo "Boa noite!";
    } else {
        echo "hora desconhecida";
    }
    echo "<br>";

    $idade = 20;
    $mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
    echo $mensagem;

    ?>

</body>

</html>