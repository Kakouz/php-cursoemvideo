<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 10</title>
  </head>
  <body>
    <?php
    $est = isset($_GET ["est"]) ? $_GET ["est"] : 0; //Parametro para conferir o estado (est) caso não exista = 0;
           switch ($est) {
             /* Checa a condição do value passado pela tag option do HTML caso coincida $reg recebe a região em questão no case */
               case "sul":
                   $reg = "Região Sul";
                   break;
               case "sud":
                   $reg = "Região Sudeste";
                   break;
               case "ne":
                   $reg = "Região Nordeste";
                   break;
               case "no":
                   $reg = "Região Norte";
                   break;
               case "co":
                   $reg = "Região Centro Oeste";
                   break;
              default:
              $reg = "Região Invalida";
          }
   echo "Você está na $reg";
   ?>
   <br />
   <a href="exercicio3.html">Voltar</a>
  </body>
</html>
