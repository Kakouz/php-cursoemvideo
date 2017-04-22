<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 11</title>
  </head>
  <body>
    <form action="Exercicio2_2.php" method="get">
      <?php
      $c = 1;
      while ($c <= 5) {
      echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br />";
      $c++;
      }
       ?>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
