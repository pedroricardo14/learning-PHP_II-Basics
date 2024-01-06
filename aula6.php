<?php
// Aula 06 - Lendo arquivos como arrays ou strings

// Hoje vamos ver como funciona para ler um arquivo .txt que
// está no mesmo diretório do programa em PHP e transformá-lo em array.
// Para fazer a leitura, vamos usar a função file, do próprio PHP.
// De arquivo para array.
// Veja abaixo:

$arquivo = file('texto.txt');
// No comando acima, estamos declarando a variável $arquivo,
// que recebe função file (que serve para dizer ao PHP que estamos
// querendo abrir um arquivo), e dentro do parênteses, colocamos o 
// caminho de onde está o arquivo que estamos querendo ler. Nesse caso,
// como o arquivo está no mesmo diretório do programa, escrevemos apenas 
// o nome do arquivo e sua extenção.

// Continuando o programa:
foreach ($arquivo as $linha) {  // files para array
  //  echo $linha . '<br/>';
}
// No trecho de código acima, estamos chamando a função foreach(para cada) e
// estamos chamando a variável $arquivo dentro do parênteses como $linha, ou seja,
// estamos dizendo ao PHP que para cada linha que haja dentro do arquivo, faça alguma coisa, 
// que no caso, estamos imprimindo todas as linhas do arquivo uma por uma.

// "Mas Pedro, como que o PHP sabe a linha se eu não declarei a variável $linha anteriormente?"
// É o seguinte, a função foreach, quando está programada no intuito de ler arquivos, ela sai
// procurando quebras de linha no arquivo (o <br/>). Para o PHP, a linha só encerra quando ele achar 
// um <br/>, é por isso que algumas vezes ele vai imprimir 3 linhas sendo que você sõ queria uma.
// Se quiser separar direito as linhas, use o <br/>.
// No caso, você faz com que o conteúdo de um arquivo entre numa array.


// Usando o file_get_contents

// o file_get_contents serve para imprimir todo o conteúdo do arquivo como 
// se fosse uma só string. Veja abaixo:

$texto = file_get_contents('texto.txt'); // de texto para string

echo $texto;

// Se você testou, como pôde ver, o PHP imprimiu o arquivo como se
// o conteúdo dele não passasse de uma única string sem nenhum <br/>.



// Obrigado por acompanhar e até a próxima ;)
