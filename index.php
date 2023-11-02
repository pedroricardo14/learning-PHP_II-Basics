<?php
// Bem-vindos(as)! Essas são aulas do básico II de PHP.
// Na aula de hoje, vamos aprender sobre variáveis superglobais.
// As variáveis superglobais são variáveis nativas de ambiente, ou seja, externas.
// Hoje vamos ver sobre a variável $GLOBALS


// Temos abaixo uma função em PHP onde temos uma variável oculta e que precisamos deixar essa
// variável válida em qualquer lugar do programa. É para isso que serve a GLOBALS.


function nome_da_funcao($variavel_oculta){
    $variavel_oculta = 'segredo';
    // abaixo vamos chamar o globals
    $GLOBALS['variavel_oculta'] = $variavel_oculta;
    // a globals está recebendo definida para ter o mesmo nome da função que iremos chamar
    //para facilitar (quando chamarmos a função variavel_oculta, estaremos também
    // chamando a globals) e está recebendo mesmo valor da $variavel_oculta.
}
nome_da_funcao($variavel_oculta);
// Pronto! O código que era para funcionar apenas dentro da função
// já está disponível no programa todo, para todo mundo.

echo $variavel_oculta;
// Esse echo serve para mostrar o resultado do comando. Se não tiver o echo, não mostra nada.

// Pronto! O código que era para funcionar apenas dentro da função
// já está disponível no programa todo, para todo mundo.

// O globals serviu para deixar a variavel oculta disponível. É preciso tomar cuidado
// ao utilizar essa variável.
