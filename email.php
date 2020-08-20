<?php
$nome = addcslashes($_POST['name'])
$telefone = addcslashes($_POST['phone'])
$email = addcslashes($_POST['email'])
$mensagem = addcslashes($_POST['message'])

$to = "thayanesheyla@gmail.com";
$subject = "Contato - PlayTech Solutions";
$body = "Nome: ".$nome."\r\n".
        "Telefone: ".$telefone."\r\n".
        "E-mail: ".$email."\r\n".
        "Mensagem: ".$mensagem;

$header = "From: thayanesheyla@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("O email não pode ser enviado");
}
?>