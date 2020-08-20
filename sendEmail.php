<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['phone'];
        $phone=$_POST['email'];
        $message=$_POST['message'];

        $to='thayanesheyla@gmail.com';
        $subject='Formulário de Contato - PlayTech Site';
        $message="Nome: ".$name."\r\n".
                "Telefone: ".$phone."\r\n".
                "E-mail: ".$email."\r\n".
                "Mensagem: ".$message."\r\n";
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1> Mensagem enviada com sucesso"." ".$name."! Entraremos em contato em breve<h1>";
        }else{
            echo "Mensagem não enviada, algo está errado!";
        }
    }
?>