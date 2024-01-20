<?php 

// Aula 07 - Escrevendo em arquivos com o PHP (utilizando o fwrite)

// ler o arquivo
$arquivo = fopen('texto.txt', 'r');

// Gravar no arquivo
$gravar = fopen('primeira_palavra.txt', 'w');

// Vamos pegar apenas a primeira palavra de cada frase


while (($linha = fgets($arquivo, 4096)) !== false) {
    //echo $linha . "<br><br>";

    // Para pegar a primeira palavra vamos usar a função explode,
    // que serve para quebrar frases.
    // Primeiro, vamos definir uma variável que recebe a função explode.
    // Depois, vamos passar para a função explode qual é o separador que ele
    // deve usar para separar a frase, que no nosso caso é apenas um espaço.

    // Depois de passar o separador, vamos dizer ao PHP qual é a string que
    // vamos usar para quebrar as linhas.

    $palavras = explode(' ', $linha);
    // Agora, para que possamos acessar apenas uma palavra do aequivo,
    // vamos criar uma variável e defini-la com a variável que está
    // recebendo a função explode e defini-la na posição em que queremos.
    // Obs: A posição é definida de acordo com os espaços que tem na frase.
    // Lembra que na função explode divide por espaços? Então! É isso aí.
    $primeira_palavra = $palavras[0];
    // Agora, vamos mostrar qual é a palavra que está na posição definida acima
    // com um echo e depois vamos fechar o comando com um exit
   // echo $primeira_palavra;
  //  exit();

   // Agora sim vamos gravar o arquivo
   fwrite($gravar, $primeira_palavra);

}

fclose($gravar);
fclose($arquivo);

