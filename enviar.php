<?php

//recupera os dados enviados pelo formulario
$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
//var_dump($GetPost) para testar

//variaveis locais
$nome     = $GetPost['nome'];
$telefone = $GetPost['telefone'];
$email    = $GetPost['email'];
$mensagem = $GetPost['mensagem'];

//incluir a classe phpmailer
include_once 'PHPMailer/class.phpmailer.php';
include_once 'PHPMailer/class.smtp.php';

//enviando email utilizando a classe PHPMailer
$mail = new PHPMailer();
//objeto $Mail

$mail->CharSet = "utf8";
//$mail->SMTPDebug = 3;
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";//da hospedagem
$mail->SMTPAuth = true;
$mail->Username = //"email da hospedagem @gmail.com"; email criado na hospedagem
$mail->Password = //"senha do email"; senha do email
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->FromName = "{$nome}";
$mail->From = //"email da hospedagem @gmail.com";
$mail->AddAddress//("email de quem receberá as informações do formulário"); endereço de recebimento
$mail->IsHTML(true);
$mail->Subject = "Novo Contato - {$nome}". " ". date('d/m/y H:i:s');
$mail->Body = "E-mail enviado por : {$nome}<br>Telefone: {$telefone}<br> Mensagem: {$mensagem}";

//Verificar o metodo(se está envaindo ou não)
if($mail->Send()){
	echo "Mensagem enivada com Sucesso, em breve entraremos em contato.";
}else{
	echo "Sua mensagem não pode ser enviada,tente novamente mais tarde!!". $mail->ErrorInfo;
}
?>







 

