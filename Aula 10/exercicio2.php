<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 10</title>
  </head>
  <body>
<?php
  $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
  switch ($d) {
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
      echo "Levanta e vai estudar :)";
      break;
    case 7:
    case 8:
      echo "Descanse pequeno gafanhoto ;)";
      break;
    default:
      echo "Dia invalido";
  }

 ?>
 <a href="exercicio2.html"></a>
  </body>
</html>
