<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 02 - Aula 15</title>
  </head>
  <body>
    <?php
    /*
    ---Diferença entre o comando include e o require.---

    O include caso não encontrado continua carregando a pagina.
    Include_once é um comando que inclui o chamado uma única vez.

    O require carrega porém ele dá fatal error caso não encontrado.
    require_once é um comando que faz o mesmo que o require
    porém ele 'requer' o arquivo somente 1x

    EXEMPLO: Utilizei o include ou require e após certa parte
    chamei o include ou require novamente 'chamando' o mesmo
    arquivo/script php. Aparecerá um erro de execução.

    No caso do include_once ou require_once mesmo você
    'chamando' o arquivo/script.php várias vezes só 1x prevalecerá
    e evitará erros de exibição. Caso esqueça e chame 2x o mesmo
    arquivo. Use com sabedoria    
    */
    require_once 'Exercicio2_2.php';
    echo "<h1>Testando novas funções</h1>";
    ola();
    mostraValor(4);
    echo "<h2>Finalizando Programa...</h2>";
     ?>
  </body>
</html>
