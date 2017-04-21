<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 1 - Aula 9</title>
  </head>
  <body>
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $idade = date("Y") - $ano;
    if ($idade >= 18) {
      $vota = "ja pode votar";
      $dirigir = "ja pode dirigir";
    }
     else {
      $vota = "não pode votar";
      $dirigir = "não pode dirigir";
    }
    echo "Você nasceu em $ano e tem $idade, $vota e $dirigir.";
     ?>
     <a href="exercicio1.html"></a>
  </body>
</html>
