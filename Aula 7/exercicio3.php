<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 7</title>
  </head>
  <body>
    <?php
    $nota1 = $_GET ["n1"];
    $nota2 = $_GET ["n2"];
    $media = ($nota1 + $nota2) / 2;

    echo "A media entre $nota1 e $nota2 é $media";

    echo "<br />A situação do aluno é ". (($media < 6) ? "REPROVADO" : "APROVADO");;
     ?>
  </body>
</html>
