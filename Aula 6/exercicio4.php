<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Variável de variável</title>
  </head>
  <body>
    <?php
    $x = "abc";
    $$x = "def";
    echo "O conteúdo da variavel X é $x";
    echo "<br />A variavel criada recebeu o valor $abc";
     ?>
  </body>
</html>
