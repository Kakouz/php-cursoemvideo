<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 11</title>
  </head>
  <body>
    <?php
    #Contador - estrutura while
  $mais1 = 1; //Pega 1 e soma +1 até 10
  while ($mais1 <= 10) {
    echo  $mais1 . "<br />";
    $mais1++;
  }; ?>
  <br />
  <?php
    $menos2 = 10; //Pega 10 e subtrai -2 até 0
    while ($menos2 >= 0) {
      echo  $menos2 . "<br />";
      $menos2 -= 2;
    };
     ?>
  </body>
</html>
