<?php
// Aula 03 - Requisições HTTP com método GET.

// Nessa aula, vamos usar o método GET para pegar informações na URL do site e 
// imprimir na página web.

$nome = $_GET['produto'];
$preco = $_GET['preco'];
$moeda = $_GET['moeda'];

echo "O produto $nome custa $preco $moeda";

// OBS: Para pegar as informações na URL do navegador vamos fazer assim:
// Estamos com o servidor PHP ativo na localhost:porta. As informações
// que estão no código (produto, preço e moeda) serão pegos na url.
// Vamos atpe a URL e após o link do localhost vamos colocar um ?
// e o produto da variável que vamos armazenar com um = e o nome
// do novo produto (Isso se aplica a tudo). Para acrescentar mais de uma
// informação usamos o &.
// Exemplo:

// https://localhost:8012/?produto=carro&preco=10000&moeda=reais
// Esse foi um exemplo de link que vpcê escreve para imprimir no site
// informações da URL. 

// Para deixar nosso site mais seguro, vamos usar a função addslashes para evitar
// problemas quanto a ataques cibernéticos. O GET sozinho é muito falho. 
// O addslashes proteje quanto ao uso de caracteres especiais, como por exemplo a \
// caracteres especiais são muito usados para quebrar a segurança do site, por isso
// que usamos o addslashes. Sempre que você tiver um método GET no seu site, use o addslashes.

$promo = addslashes($_GET['desconto']);
echo $promo;
// Obrigado por acompanhar e até a próxima.
