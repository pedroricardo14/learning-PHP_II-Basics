<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php

// Aula 09 - Lendo arquivos CSV com PHP
// Na aula de hoje, estamos fazendo uso da estrutura HTML para lidar melhor 
// com a tabela. (CSV é o tipo de arquivo do Excel)

// Primeiro, vamos criar uma variável chamada arquivo que recebe
// a função fopen (para abrir arquivos), o nome do arquivo e o modo de uso.

$arquivo = fopen('livros.csv', 'r'); 

?>

<!--  Abaixo, vamos criar a estrutura de uma Tabela
      em HTML, onde vamos misturar com o PHP para pegar
      todos os dados de nossa base de dados. 
      Obs: Também estamos usando o bootstrap para estilizar. -->

<table class="table table-striped table-hover table-sm">
    <!--  Abaixo, vamos fazer um laço while, para que enquanto
          houver linha no arquivo, criar uma nova célula
          (como se fosse no excel) com o dado na base de dados  -->
    <?php while($linha = fgets($arquivo)): ?>
        <tr>
            <!--  Nosso arquivo .csv divide os itens da tabela por ;
                  Então nesse caso vamos definir que o explode
                  (função para quebrar linhas), vai quebrar no ;
                  para que sejam criadas linhas novas e não fique
                  tudo emaranhado.  -->
            <?php $celulas = explode(';', $linha); ?>
            <!--  Abaixo: Para cada célula que houver, crie uma linha
                  nova com o item da variável $celula  -->
            <?php foreach($celulas as $celula): ?>
                <td><?=$celula?></td>
                <!--Vamos encerrar o foreach-->
            <?php endforeach; ?>
        </tr>
        <!--  Vamos encerrar o while  -->
    <?php endwhile; ?>
</table>
    <!-- Conteúdo finalizado por hoje. Em breve publicarei a parte 2,
         que é onde eu uso arquivos .csv com a própria função csv do PHP.
         Obrigado por acompanhar até aqui e até a próxima.   -->
</body>
</html>