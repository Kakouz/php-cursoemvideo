<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Referencia</title>
  </head>
  <body>
    <?php
    $a = 3;
    $b = &$a; //Referenciando $b para ser sempre igual a $a
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br /> A variavel B vale $b";
     ?>
  </body>
</html>
