<?php
// Aula 10 - Como acessar todo e qualquer arquivo dentro de um diretório com o PHP.
// Vamos primeiro identificar quais são os arquivos PHP presentes no diretório e quais
// são os arquivos txt presentes.

// Essa função pode ser aplicada quando você está trabalhando em um diretório com
// muitos arquivos e você precisa achar um específico.

// Vamos usar a função GLOB, que serve para que você encontre arquivos ou documentos
// com base num padrão

// Vamos achar um arquivo específico com o seguinte código:

//$arquivos_php = glob('aula9.php');

//var_dump($arquivos_php);

// Para listar todos os arquivos PHP dentro do diretório vamos fazer o seguinte:

//$arquivos_php = glob('*.php');

//var_dump($arquivos_php);

// Para deixar mais organizado vamos fazer um laço de repetição:

//foreach($arquivos_php as $i){
  //  echo $i . '<br>';
//}


// echo '<br>'; 

// Para arquivos txt usamos a mesma função:

$arquivos_txt = glob('*.txt');

// Agora vamos supor que você quer passar esses arquivos para um
// novo diretório através do PHP. Você vai criar o diretório e passar
// os arquivos em seguida, tudo através do código em PHP, nada manual:

// Vamos usar o mkdir, que além de um comando linux, é uma função do PHP:

@mkdir('txt');

// Acima estamos usando um @ apenas para ignorar possíveis erros.

foreach($arquivos_txt as $i) {
    echo '<b>' . $i . '</b><br>';
    // Nós podemos combinar essa funcionalidade com outras, por exemplo:
    // Ao invés de só ver o nome dos arquivos, vamos abrí-los:
    $texto = file_get_contents($i);
    echo $texto . '<br>';

    // Vamos criar um ponteiro e função que vai jogar os arquivos dentro do diretório txt:

    $w = fopen('txt/'.$i, 'w');
    fwrite($w, $texto);
    fclose($w);
}

// E pronto! Ao rodar esse código, você além de ver os arquivos na tela, você
// automaticamente vai criar um diretório chamado txt onde o PHP vai copiar todos
// esses arquivos txt da raiz e colar dentro do diretório novo.

// Obrigado por acompanhar até aqui e até a próxima ;)


