<?php

define('SITE_URL','http://flexibilite.com.br');

if(isset($_POST['submitEmail'])){
    
    $to = 'isis.chaves@gmail.com';
    $subject = 'Novo Contato Hotsite';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h1>Você recebeu um novo contato do seu Hotsite! </h1>';
    $message .= 'Os dados do contato foram:';
    $message .= '<br><br>';
    $message .= '<strong>Nome:</strong>'.$_POST['nome'];
    $message .= '<br><br>';
    $message .= '<strong>Email:</strong>'.$_POST['email'];
    $message .= '<br><br>';
    $message .= '<strong>Assunto:</strong>'.$_POST['assunto'];
    $message .= '<br><br>';
    $message .= '<strong>Conteúdo da Mensagem:</strong>'.$_POST['mensagem'];
    $message .= '<br>';
    $message .= '</body></html>';
    
    mail($to, $subject,$message,$headers);
}