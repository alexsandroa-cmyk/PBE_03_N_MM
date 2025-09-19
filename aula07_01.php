<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula07_01 18-09-2025</title>
</head>

<body>
    <h1>Aula07_01 - 18-09-2025</h1>
    <h2>Operadores aritmeticos</h2>
    <?php
    $a = 10; //Aqui estamos criando uma variavel (A) que vai receber o valor de 10 - $a = 10;
    $b = 2; //Aqui estamos criando uma variavel (B) que vai receber o valor de 2 - $b = 2
    echo "Adição:" . ($a + $b); //Aqui estamos fazendo a adição dos valores das variaveis ($a + $b)
    echo "<br>Subtração:" . ($a - $b); //Aqui estamos fazendo a subtração dos valores das variaveis ($a - $b)
    echo "<br>Multiplicação:" . ($a * $b); //Aqui estamos fazendo a multiplicação dos valores das variaveis ($a * $b)
    echo "<br>Divisão:" . ($a / $b); //Aqui estamos fazendo a divisão das variaveis ($a / $b)
    echo "<br>Módulo:" . ($a % $b); //Aqui estamos fazendo o resto da divisão das variaveis ($a % $b)
    echo "<br>Exponenciação:" . ($a ** $b); //Aqui estamos fazendo a exponenciação das variaveis (a$ ** $b)
    //para que os valores seja calculados, devemos utilizar o . e logo em seguida acrescentar a variavel e o tipo de operação que iremos realizar
    ?>
    <h2>Atribuição</h2>
    <?php
    $a = 10; //a variavel $a esta recebendo um valor ( esse valor esta sendo atribuido a ela )
    $b = 2; //a variavel $b esta recebendo um valor ( esse valor esta sendo atribuido a ela )
    $a += $b; //aqui esta sendo feito uma operação de atribuição, onde a variavel $a+=$b (esta sendo feito uma soma) 10 + 2 = 12
    $b -= 5; //aqui esta sendo feito uma operação de atribuição, onde a variavel $b -=5 (esta sendo feito uma subtração) 5 -2 = -3
    echo "a = " . $a;
    echo "<br>b = " . $b;
    $c = 11;
    $d = 6;
    $c %= $d; //aqui estamos fazendo uma operação de atribuição, onde a vcariavel $c % $d (estamos fazendo o resto da divisão) 11 + 6 = 5
    $d += $a; //aqui estamos fazendo uma operação de atribuição, onde a variavel $d += $a (estamos fazendo uma soma) 6 + 12 = 18
    echo "<br>c = " . $c;
    echo "<br>d = " . $d;
    ?>
    <h2>String</h2>
    <?php
    $a = "Bete "; //Criando a variavel e atribundo o valor para ela (Bete)
    echo "$a <br>"; //mostrando o valor ("Bete")
    $b = "Maria "; //Criando a variavel e atribundo o valor para ela (Maria)
    echo "$b <br>"; //mostrando o valor ("Maria")
    echo $a . $b; // mostra o valor Maria Bete - pois a variavel $a esta sendo atribuido o valor da variavel $b e sera mostrado Maria bete
    $b .= $a; // mostra o valor Bete Maria - pois a variavel $b esta sendo atribuido o valor da variavel $a e sera mostrado o valor Bete Maria
    echo "<br>$b";
    ?>
    <h2>Incremento/Decremento</h2>
    <?php
    $x = 100; //Criando a variavel $x
    echo "x = " . ++$x; // estamos incrementando, ou seja adicionando +1 (Pré-Incremento)
    //echo "x = " . $x++ (Pós-Incremento)
    echo "<br>x final = " . $x; //Vai mostrar o valor final do incremento (+1)
    echo"<hr>";

    $i=10;
    echo"<br> i = $i";
    $i++;
    $i++;
    ++$i;
    ++$i;
    //Podemos alterar esse metodo acima e colocar o $i+4 - aqui estamos incrementando o valor mais 4 .
    echo"<br> i = $i";
    $i--;
    $i--;
    --$i;
    echo"<br> i = $i";

    ?>
</body>

</html>