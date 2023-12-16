<?php
// Aula 05 - manipulação de arquivos em PHP.
// Na manipulação de arquivos em PHP, usamos o que podemos chamar de "ponteiro",
// que é uma variável que armazena o caminho de onde está o arquivo que vamos utilizar (texto.txt).
$arquivo = fopen('texto.txt', 'r');
// A variável arquivo recebe o caminho do texto.txt e abre o arquivo no modo de leitura(r).


// Vamos usar abaixo o fgets, que serve para recuperar uma linha de um ponteiro
// linha por linha.

// Como o arquivo que vamos obrir está no mesmo diretório que esse programa,
// não vamos fazer a verificação se o arquivo existe, vamos direto para o while.

// Abaixo: passamos o while, depois o buffer que irá receber o fgets para recuperar a linha, passamos
// o nome do ponteiro e o tamanho máximo da linha que o fgets deve recuperar.
// Nesse caso 4096 == 4KB, e verificamos se é verdadeiro ou falso
// Depois vamos imprimir a variável linha para ver o que o fgets recuperou.

while (($linha = fgets($arquivo, 4096)) !== false){
    echo $linha;
}