<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 7</title>
  </head>
  <body>
    <?php
    //Testar valores iguais e identicos
    $a = 3;
    $b = "3";

    $r = ($a == $b) ? "SIM" : "NÃO"; //Testa se é igual
    $r2 = ($a === $b) ? "SIM" : "NÃO"; //Testa se é igual e do mesmo tipo (numero, string, etc...)

    echo "As variaveis A e B são iguais ? $r";
    echo "<br />As variaveis A e B são identicas? $r2";
     ?>
  </body>
</html>
