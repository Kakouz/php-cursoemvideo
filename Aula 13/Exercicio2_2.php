<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 13</title>
  </head>
  <body>
    <?php
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    for ($c=1; $c <= 10 ; $c++) {
      $r = $n * $c;
      echo "$n x $c = $r <br />";
    }
    ?>
    <a href="Exercicio2.php">Voltar</a>
  </body>
</html>
