<?php 
require_once("cabecalho.php"); 

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
?>
<body background="img/mercado4.jpg">
<h1>Entre em Contato</h1>
<form action="envia_contato.php" method="post">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" class="form-control" placeholder="Seu Nome Completo"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="form-control" placeholder="Seu Email"></td>
        </tr>
        <tr>
            <td>Mensagem:</td>
            <td><textarea class="form-control" name="mensagem" placeholder="Deixe sua Mensagem"></textarea></td>
        </tr>
        <tr>
            <td><button type="submit" class="btn btn-primary">Enviar</button></td>
        </tr>
    </table>
</form>
</body>
<?php require_once("rodape.php"); ?>