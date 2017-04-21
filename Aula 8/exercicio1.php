<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 01 - Aula 8</title>
  </head>
  <body>
    <?php
    $valor = $_GET["valor"];
    echo "O valor enviado foi $valor";
    $valor = sqrt($valor);
    echo "<br /> A raiz quadrada é ". number_format($valor, 2);
    ?>
    <br />
    <a href="exercicio1.html">Voltar</a>
  </body>
</html>
