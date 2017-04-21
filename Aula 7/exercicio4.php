<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 04  - Aula 7</title>
  </head>
  <body>
    <?php
    $ano = $_GET ["an"];
    $idade = 2017 - $ano;
    $tipo = ($idade >= 18 && $idade < 65)?"OBRIGATORIO":"NÃO OBRIGATORIO";
    echo "Quem nasceu em $ano tem $idade anos.<br />";
    echo "Seu voto é $tipo";
     ?>
  </body>
</html>
