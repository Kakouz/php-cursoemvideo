<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 16</title>
  </head>
  <body>
    <?php
      $p = "Leite";
      $pr = 4.5;
      //echo "O $p custa R$ " . number_format($pr, 2); <- Mesma coisa de baixo
      printf ("O %s custa R$ %.2f",$p, $pr);
     ?>
  </body>
</html>
