<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 11 - Aula 16</title>
  </head>
  <body>
    <?php
    $v[0] = "Curso";
    $v[1] = "em";
    $v[2] = "Video";
    $t = implode(" ", $v); // $t = join(" ", $v) <- Funciona da mesma maneira que o implode
    echo "$t";
     ?>
  </body>
</html>
