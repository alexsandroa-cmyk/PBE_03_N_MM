<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_01</title>
</head>
<body>
    <h1>Aula05_01- 04/09/25</h1>
    <?php
   	$nome="Bete"; // estamos declarando uma variavel do tipo string 
    $nota = 7.5; //estamos declarando uma variavel do tipo float
    $idade = 18; // estamos declarando uma variavel do tipo int
    
    //para declarar a variavel usamos o cifrão $
    
    // o sinal de igual (=) signifca na programação que a variavel esta 	recebendo um valor.
    
    // todo numero que tem uma virgula, seja altura, peso etc, sera 		considerado como float.
    
    echo "Seu nome é $nome <br>"; //para mostrar a saidas das variaveis declaradas, devemos colocar o comando de saída ECHO. logo em seguida colocamos a variavel que foi declarada. como esta no codigo acima
    
    echo "Sua nota é de $nota<br>";
    //aqui estamos apresentando a nota, mas sempre declarando a variavel que declaramos no começo.
    
    echo "Sua idade é de $idade<br>";
    //aqui estamos apresentando a idade, que foi declarada na variavel IDADE. sempre que for mostrar a saida de dados da variavel devemos sempre colocar a variavel (mostrar ela)    
    
    var_dump($idade);// uma função que mostra o tipo de variavel, seja ela INT, STRING etc. sempre que quisermos veririfcar esse tipo de dado, devemos utilizar essa função. nessa caso estamos mostrando o var_dump($idade) que é para mostrar o tipo de variavel que estamos guardando
    
    var_dump($nome);// uma função que mostra o tipo de variavel, seja ela INT, STRING etc. sempre que quisermos veririfcar esse tipo de dado, devemos utilizar essa função. nessa caso estamos mostrando o var_dump($nome) que é para mostrar o tipo de variavel que estamos guardando
    
    var_dump($nota);// uma função que mostra o tipo de variavel, seja ela INT, STRING etc. sempre que quisermos veririfcar esse tipo de dado, devemos utilizar essa função. nessa caso estamos mostrando o var_dump($nota) que é para mostrar o tipo de variavel que estamos guardando
    ?>

    <a href="index.php">ir para inicio - 28/08/2025</a>
    
</body>
</html>