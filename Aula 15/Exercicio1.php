<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 15</title>
  </head>
  <body>
    <?php
    echo "<h1>Passagem por valor</h1>";
    function soma ($x) {
      $x += 2;
      echo "<p>O valor de X é $x</p>";
    };
    $a = 3;
    soma($a);
    echo "<p>O valor de A é $a</p>"; ?>
    <br>
    <?php
    echo "<h1>Passagem por referencia</h1>";
    function soma2 (&$x) {
      $x += 2;
      echo "<p>O valor de X é $x</p>";
    };

    $a = 3;
    soma2($a);
    echo "<p>O valor de A é $a</p>";
      ?>
  </body>
</html>
