<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 1 - Aula 10</title>
  </head>
  <body>
    <?php
    $num = isset($_GET["num"]) ? $_GET["num"] : 1;
    $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
    switch ($o) {
      case 1:
        $r = $num * 2;
        break;
      case 2:
        $r = pow($num, 3);
        break;
      case 3:
        $r = sqrt($num);
    }
    echo "O resultado da operação foi $r";
     ?>
     <br />
     <a href="exercicio1.html">Voltar</a>
  </body>
</html>
