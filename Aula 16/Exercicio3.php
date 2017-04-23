<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 16</title>
  </head>
  <body>
    <?php
      $t = "Este é um exemplo de string gigante que vai mostrar o exemplo de quebra de linha pelo PHP...";
      $res = wordwrap($t, 20, "<br />\n");
      echo ($res);
     ?>
  </body>
</html>
