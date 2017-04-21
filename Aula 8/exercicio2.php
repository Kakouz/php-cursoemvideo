<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 8</title>
  </head>
  <body>
    <?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
    $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
    $sexo =isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
    $idade = date("Y") - $ano;
    echo "Seu nome é $nome, sua idade é $idade anos e você é $sexo.";
     ?>
     <a href="exercicio2.html">Voltar</a>
  </body>
</html>
