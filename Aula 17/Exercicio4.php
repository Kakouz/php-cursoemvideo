<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 4 - Aula 17</title>
  </head>
  <body>
      <?php
      $f = "Estou aprendendo PHP";
      $p = strpos($f, "PHP"); //Igualidade maiusculo e minusculo fazem diferença
      echo "A string foi encontada nas posição $p <br />";
      $p = stripos($f, "php"); //Ignora maisculas e minusculas só acha a palavra
      echo "A string foi encontrada na posição $p";
     ?>
  </body>
</html>
