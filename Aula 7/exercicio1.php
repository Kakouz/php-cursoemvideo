<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 7</title>
  </head>
  <body>
    <?php
    //Receba valores e faça contas
    $n1 = $_GET["a"]; //Receba $n1(a)
    $n2 = $_GET["b"]; //Receba $n2(b)
    $tipo = $_GET["op"]; //Receba $tipo(op)
    echo "Os valores passados foram $n1 e $n2 <br />";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; //se tipo = s some, se não multiplique
    echo "O resultado sera $r";
     ?>
  </body>
</html>
