<?php require_once("cabecalho.php"); 

session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
require_once("class/PHPMailerAutoload.php");

//Criamos agora um novo email a ser enviado
$mail = new PHPMailer();

//configuração de dados do servidor gmail para envio de emails
$mail->isSMTP();
$mail->Host = 'smtp-mail.outlook.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "alirio_melo@hotmail.com";
$mail->Password = "alirio.melo88";

//Agora vamos ao email, primeiro quem está enviando o email, no nosso caso é o administrador da loja, quem fez o site
$mail->setFrom("alirio_melo@hotmail.com", "Email do Site Minha Loja");
//E quem vai receber o email, no nosso caso, o mesmo usuário
$mail->addAddress("alirio_melo@hotmail.com");
//Confiramos o título da mensagem
$mail->Subject = "Site Minha Loja";
//o corpo da mensagem como HTML
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
//caso o usuário não abra o email em modo html, mas sim em modo txt, você pode querer mostrar uma mensagem diferente
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem:{$mensagem}";
//verificando se deu algum erro
if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com Sucesso!";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar Mensagem!" . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();
?>
<?php require_once("rodape.php"); ?>