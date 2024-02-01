<?php 
// Aula 08 - Atualizando arquivos no PHP.
// Na aula de hoje, vamos ver como podemos fazer para atualizar um
// arquivo no PHP. Na última aula, usamos o fopen e o fwrite para
// escrever em um arquivo, já na de hoje vamos aprender a atualizar
// seguindo uma estrutura parecida com a da última aula.
// Hoje vamos atualizar o arquivo da seguinte forma:
// Além de gravar a primeira palavra no arquivo, vamos adicionar a 
// últma palavra de cada bloco de texto. Ou melhor ainda, vamos intercalar
// as cinco primeiras palavras do texto com as cinco últimas.

// Para que nós possamos alterar o arquivo, precisamos mudar o modo 
// de uso do fopen sobre o arquivo que desejamos alterar.
// Existem alguns modos de uso (w, r, a, a+...) Vamos usar o a+
// Esses modos, respectivamente são: Escrita(write), leitura(read), append(a)
// append+ significa que irá adicionar algo novo no arquivo e deixar 
// o ponteiro no final do arquivo (isto é, vai executar o arquivo depois de fazer a leitura).

// Vamos usar o modo file de leitura de arquivos
$arquivo = file('texto.txt');

// Vamos usar o a+ no arquivo primeira_palavra.txt, que é o arquivo que nós
// desejamos alterar.

$gravar = fopen('primeira_palavra.txt', 'w');

// Parte de gravar a primeira palavra
foreach ($arquivo as $linha){
    $palavras = explode(' ', $linha); // quebra em palavras
    $primeira_palavra = $palavras[0]; // primeiro palavra
    fwrite($gravar, $primeira_palavra); // gravar o arquivo
}
fclose($gravar);

$gravar = fopen('primeira_palavra.txt', 'a+');
// Observação: Quando usamos o modo a+, estamos apagando o arquivo da modificação
// e fazendo de novo.

fwrite($gravar,"\n");
// Fizemos o fwrite acima para corrigir um bug. Adicionamos uma quebra de linha na
// metade dos itens da lista que aparece no arquivo que estamos modificando.

// Parte de gravar a última palavra
foreach ($arquivo as $linha){
    $palavras = explode(' ', $linha); // quebrar em palavras
   // $primeira_palavra = $palavras[0];
   $ultima_palavra = $palavras[count($palavras)-1]; // última palavra

    // Vamos fazer uma modificação no programa, pois ao executar o código,
    // o PHP está por algum motivo adicionando uma quebra de linha a mais
    // nas linhas do nosso arquivo que está sendo modificado. Vamos corrigir
    // esse pequeno bug abaixo:

    $ultima_palavra = str_replace(".\n", '', $ultima_palavra);
    $ultima_palavra = str_replace(".", '', $ultima_palavra);

    // Na correção de bug acima, estamos pegando a variável em que está
    // armazenado a função de pegar a última palavra do texto, estamos atribuindo
    // a ela a função str_replace, que serve para fazer uma substituição de string e
    // dentro dessa função, estamos dizendo ao PHP para substituir todo e qualquer 
    // ponto final e quebra de linha (\n) no fim de cada frase e substituir por
    // um espaço em branco na variável $ultima_palavra.


   fwrite($gravar, $ultima_palavra); // gravar o arquivo


}
fclose($gravar);
echo 'Arquivo salvo em "primeira_palavra.txt"';
