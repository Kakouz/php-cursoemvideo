<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 12</title>
  </head>
  <body>
    <h3>Escolha um numero para exibir a tabuada.</h3>
    <br>
    <form action="Exercicio3_3.php" method="get">
      Numero: <select name="numero">
        <?php
        $c = 1;
        while ($c <= 10) {
          echo"<option value='$c'>$c</option>";
          $c++;
        }
          ?>
      </select>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
