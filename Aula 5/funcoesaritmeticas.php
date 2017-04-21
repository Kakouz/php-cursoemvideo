<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funções artiméticas em PHP</title>
    <style>
      h2 {
        font-size: 15pt;
        font-weight: bold;
        font-family: Arial;
      }
    </style>
  </head>
  <body>
    <h1>COLOQUE O VALOR DE 'x' E 'y' no navegador <br />
    exemplo ...aritmeticas.php?x=8&y=3</h1> 
   <?php
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];

    echo "<h2>Valores recebidos $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 é ". abs($v2);
    echo "<br />O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2);
    echo "<br />A raiz de $v1 é ". sqrt($v1);
    echo "<br /> O valor de $v2 arrendodado é ". round($v2); //ceil(arrendonda pra cima) flor(arrendonda pra baixo)
    echo "<br /> A parte inteira de $v2 é ". intval($v2);
    echo "<br />O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");

    ?>


  </body>
</html>
