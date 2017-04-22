<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 12</title>
  </head>
  <body>
    <?php
    $c = 1;
    #Contar de 1 em 1
    echo "Somando 1 em 1 <br />";
    do {
      echo "$c ";
      $c++;
    } while ($c <= 10);
    ?> <br>
    <?php
    $c = 1;
    #Contar de 2 em 2
    echo "Somando 2 em 2 <br />";
    do {
      echo "$c ";
      $c += 2;
    } while ($c <= 20);
     ?> <br />
     <?php
     $c = 10;
     #Subtrair 1 em 1 (mesma ideia se aplica para subtrair de 2 em 2)
     echo "Subtraindo de 1 em 1 <br />";
     do {
       echo "$c ";
       $c -= 1;
     } while ($c >= 1);
      ?>
  </body>
</html>
