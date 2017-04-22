<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 13</title>
  </head>
  <body>
    <?php
    $num = isset($_GET["primo"]) ? $_GET["primo"] : 1;
    $check = 0;
    $multiplos = 1;
    echo "<h1>Analisando o número $num</h1>";
    echo "Valor Multiplo: ";
    for ($i=1; $i <= $num; $i++) {
      if ($num % $i == 0) {
        echo "$i ";
        $check++;
      }
    }
    echo "<br />";
    echo "Total de Multiplos $check <br />";
    if ($check === 2) {
      echo "Resultado: $num É PRIMO!";
    } else {
      echo "Resultado: $num NÃO É PRIMO.";
    }
     ?>
  </body>
</html>
