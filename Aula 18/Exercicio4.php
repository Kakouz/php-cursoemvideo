<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 04 - Aula 18</title>
  </head>
  <body>
    <pre>
        <?php
        $v = array("nome" => "Tiago", "idade" => 18, "Peso" => 65.5);
        $v["fuma"] = false;
        foreach($v as $c => $valor) {
          echo "<br />O valor de $c é $valor";
        }
        ?>
       </pre>
  </body>
</html>
