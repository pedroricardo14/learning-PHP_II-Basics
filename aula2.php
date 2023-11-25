<?php 
// Aula 02 - Obtendo informações do servidor com o $_SERVER
// $_SERVER
// O comando abaixo vai imprimir todas as informações do servidor no navegador.
//print_r($_SERVER);

// Para deixar mais organizado, vamos usar um foreach para imprimir

//foreach ($_SERVER as $chave => $valor){
//    echo $chave . '<br/>'. $valor . '<br/><br/>';
//}

// Para imprimir uma informação específica, podemos escolher a posição da lista de onde o 
// PHP irá mostrar.

echo $_SERVER['SERVER_NAME'];

