<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aula 10_01 - 23/10/2025</h1>
    <?php
    echo "<h2>while</h2>";
    $i = 13;
    while ($i < 17) {
        echo "$i ";
        $i++;;
    }
    echo "<hr>"
    ?>
    <!-- acima estamos fazendo um loop onde tem que aparecer a saida que esta pedindo (16)  e usamos
     o icremento (++)-->

    <!-- 1) 13 14 15 16 -->
    <!-- 2) 13 -->
    <!-- 3) $i<17 -->
    <!-- 4) 4 -->
    <!-- 5) 17 -->
    <h1>Aula 10_01 - 23/10/2025</h1>
    <?php
    echo "<h2>while</h2>";
    $i=6;
    while($i>0){
        echo "$i ";
        $i--;;
    }
    echo "<hr>"
    ?>
    <!-- acima estamos fazendo um loop onde tem que aparecer a saida (5) onde esta sendo
     subtraido os valores e para isso usamos o incremento (--) -->
    <!-- $i++;/$i=$i+1//$i+=1-->
         <h1>Aula 10_01 - 23/10/2025</h1>
    <?php
    echo "<h2>while</h2>";
    $i=0;
    while($i<=10){
        echo "$i ";
        $i+=2;
    }
    echo "<hr>"

    
    ?>
    <!-- acima estamos fazendo um loop onde tem que aparecer a saida de (10), onde esta sendo
    adicionado +2 e para isso usamos o incremento -->
     <?php
     echo "<h2>do while</h2>";
    $i=7;
    do{
        echo "$i ";
        $i++;
    }while($i<5);
    
    ?>     
   <?php
     echo "<h2>For</h2>";
    for($i=5;$i<25;$i+=5)
        echo "$i ";
    ?>  

    <?php
    for ($i=0; $i<4; $i++) {
    for ($j=0; $j<5; $j++) {
    echo "$i $j<br>";
  }
}
?>
</body>

</html>