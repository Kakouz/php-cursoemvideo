<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 12</title>
  </head>
  <body>
    <?php
    $v = isset($_GET["val"]) ? $_GET["val"] : 1;
    echo "<h1>Calculando o fatorial de $v</h1>";
    $c = $v;
    $fat = 1;
    do {
      $fat = $fat * $c;
      $c--;
    } while ($c >= 1);
    echo "<h2>$v ! = $fat</h2>";
     ?>
     <a href="Exercicio2.html">Voltar</a>
  </body>
</html>
