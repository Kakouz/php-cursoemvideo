<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operadores Aritméticos</title>
  </head>
  <body>
    <h3>Soma = (+)</h3>
    <h3>Subtração = (-)</h3>
    <h3>Multiplicação = (*)</h3>
    <h3>Divisão = (/)</h3>
    <h3>Modulo [resto da divisão] = (%)</h3>

    <?php
    $n1 = 3;
    $n2 = 2;
    $m = ($n1 + $n2) / 2;
    echo  "A soma entre $n1 e $n2 vale ". ($n1 + $n2);
    echo  "<br />A subtração entre $n1 e $n2 vale ". ($n1 - $n2);
    echo  "<br />A multiplicação entre $n1 e $n2 vale ". ($n1 * $n2);
    echo  "<br />A divisão entre $n1 e $n2 vale ". ($n1 / $n2);
    echo  "<br />O modulo entre $n1 e $n2 vale ". ($n1 % $n2);
    echo "<br /> A Média vale $m"
     ?>
  </body>
</html>
