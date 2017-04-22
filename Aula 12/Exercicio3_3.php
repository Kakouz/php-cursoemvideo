<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 12</title>
  </head>
  <body>
    <?php
    $valor = isset($_GET["numero"]) ? $_GET["numero"] : 1;
    $final = 1;
    do {
      $multi = $final * $valor;
      echo "$valor x $final = $multi <br />";
      $final++;
    } while ($final <= 10);
     ?>
     <a href="Exercicio3.php">Voltar</a>
  </body>
</html>
