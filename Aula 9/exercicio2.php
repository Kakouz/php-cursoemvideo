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
    if ($idade < 16) {
      $tipoVoto = "não vota";
    }
    elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
          $tipoVoto = "voto opcional";
   }
   else {
          $tipoVoto = "voto obrigatorio";
   }

    echo "Com a idade de $idade anos, seu tipo de voto é $tipoVoto";
     ?>
     <a href="exercicio2.html"></a>
  </body>
</html>
