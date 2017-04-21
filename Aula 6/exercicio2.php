<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ano Atual</title>
  </head>
  <body>
    <?php
    /* Esse exercicio pretende demonstrar o uso de operadores de incremento e decremento */
        $atual = $_GET["aa"]; #Essa linha vai pegar o ano na URL
    echo "O ano atual é $atual e o ano anterior é ". --$atual;
     ?>
  </body>
</html>
