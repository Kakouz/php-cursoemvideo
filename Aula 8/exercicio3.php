<!DOCTYPE html>
<html>
  <head>
    <?php
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
     ?>
    <meta charset="utf-8">
    <title>Exercicio 03 - Aula 8</title>
    <style>
      span.texto {
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor; ?>;
      }
    </style>
  </head>
  <body>
    <?php
    echo "<span class='texto'> $txt </span>";
     ?>
  </body>
</html>
