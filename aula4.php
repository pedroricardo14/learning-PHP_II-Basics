// Aula 4 - Requisições HTTP com o método POST.
// O método POST é muito usado em formulários para fazer o 
// envio de informações ao servidor. Vamos então criar um form.

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    
    <h1>Contato</h1>
    
    <form action="" method="POST">
    
        <label for="">Nome:</label>
        <input type="text" name="nome" placeholder="Digite o seu nome" class="form-control">
        <label for="">Assunto:</label>
        <input type="text" name="assunto" placeholder="Digite o assunto" class="form-control">
        <label for="">Mensagem:</label>
        <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Digite a mensagem" class="form-control"></textarea>

        <input type="submit" name="submit" value="Enviar">
    </form>

<?php

if(isset($_POST['submit'])){
// Usamos a função isset para verificar se uma variável existe através do nome
// nesse caso, se a variável post existe na posição submit (com o name = "submit").
// (É um método de segurança para evitar erros.)
$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

echo "Nome: $nome<br/><br/>";
echo "Assunto: $assunto<br/><br/>";
echo "Mensagem: $mensagem<br/><br/>";

}
?>




</div>