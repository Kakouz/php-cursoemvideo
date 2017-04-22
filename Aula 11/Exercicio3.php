<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 11</title>
  </head>
  <body>
    <form action="Exercicio3_3.php" method="get">
      Inicio: <input type="number" name="inicio" value="1" max="1000" min="1"> <br>
      Final: <input type="number" name="final" value="10" min="1" max="1000"> <br>
      Incremento: <select name="valor">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <br>
      <input type="submit" value="Contar">
    </form>
  </body>
</html>
