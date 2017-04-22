<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 11</title>
  </head>
  <body>
    <?php
    $i = 1;
    while ($i <= 5) {
      $v = "num" . $i;
      $url = "v" . $i;
      $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
      $i++;
    }
    $i = 1;
    while ($i <= 5) {
      $v = "num" . $i;
      echo "Valor $i:" . $$v . "<br />";
      $i++;
    }

     ?>
  </body>
</html>
