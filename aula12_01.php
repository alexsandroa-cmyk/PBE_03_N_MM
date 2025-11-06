<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - 06/11/2025</title>
    <style>
        body{
            background-color:black;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Arrays</h1>
    <?php
    //$cores=array("blue",'red',"green");
    //          0     1     2
    $cores = ["blue", "red", "green", "yellow", "red", "white", "gray", "pink", "orange", "blue"];
    echo "Quantidade: " . count($cores);
    sort($cores); //deixando os valores em ordem alfabetica
    for ($i = 0; $i < count($cores); $i++) {
        echo "<p style='background:$cores[$i];'>$cores[$i]</p>"; // Usando a cor correspondente
        //acima estamos fazendo um style (estilo) para o nosso paragrafo.
        //colocamos o array ($cores[$i]) para que identifique as cores, quando azul for menor que 0,
        //ira ser mostrado a cor azul (correspondente a ele mesmo.)

    }

    // echo"<p>$cores[0]</p>";
    // echo"<p>$cores[1]</p>";
    // echo"<p>$cores[2]</p>";
    $produto=[
        "id"=>1,
        "Nome"=>"caderno",
        "valor"=>30.55
    ];
    foreach($produto as $pos=>$valor){
        echo"$pos: $valor<br>";
        //foreach é a funcção do array e nele estamos colocando os valores que e o mesmo ira receber
        //echo mostra o resultado do array. 
    }
    //acima estamos fazendo um array que faz um loop com caracteres...
       $produtos=[
        ["id"=>1,"Nome"=>"caderno","valor"=>30.55],
        ["id"=>2,"Nome"=>"lapis","valor"=>2.35],
        ["id"=>3,"Nome"=>"borracha","valor"=>0.55]
    ];  
    // echo $produtos[1]["id"]."<br>";
    // echo $produtos[1]["Nome"]."<br>";
    // echo $produtos[1]["valor"]."<hr>";
    foreach($produtos as $linha){
        echo $linha["id"]. "<br>";
        echo $linha["Nome"]."<br>";
        echo $linha["valor"]."<br>";
    }
    
    ?>

</body>

</html>