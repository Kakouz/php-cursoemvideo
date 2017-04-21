<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 1 - Aula 9</title>
  </head>
  <body>
    <?php
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900; //Checa se o valor foi inputado
    $idade = date("Y") - $ano; //transforma o ano de nascimento em idade
    if ($idade >= 18) { //confere se vota e dirige
      $vota = "ja pode votar";
      $dirigir = "ja pode dirigir";
    }
     else { //confere se vota e dirige
      $vota = "não pode votar";
      $dirigir = "não pode dirigir";
    }
    echo "Você nasceu em $ano e tem $idade, $vota e $dirigir."; //output do codigo
     ?>
     <a href="exercicio1.html"></a>
  </body>
</html>
