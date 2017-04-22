<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 13</title>
  </head>
  <body>
    <form action="Exercicio2_2.php" method="get">
      <select name="num">
      <?php
      for ($i=1; $i <= 10; $i++) {
        echo "<option>$i</option>";
      }
       ?>
      </select>
      <input type="submit" value="Tabuada" />
    </form>
  </body>
</html>
