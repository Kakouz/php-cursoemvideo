<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 1 - Aula 9</title>
  </head>
  <body>
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900; //Confere se o valor inputado existe
    $idade = date("Y") - $ano; //Transforma o ano de nascimento em idade
    if ($idade < 16) { //confere se não vota
      $tipoVoto = "não vota";
    }
    elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) { //confere se o voto é opcional
          $tipoVoto = "voto opcional";
   }
   else { //confere se vota
          $tipoVoto = "voto obrigatorio";
   }

    echo "Com a idade de $idade anos, seu tipo de voto é $tipoVoto"; //output do calculo
     ?>
     <a href="exercicio2.html"></a>
  </body>
</html>
