<?php 
    $destinatario = "pedro52998@gmail.com";
    $assunto = "automatizacao";
    $mensagem = "voce acaba de receber uma e-mail automatico :)";
    
    // Cabeçalhos do e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: pedro52998@gmail.com" . "\r\n";
    
    // Envia o e-mail
    if(mail($destinatario, $assunto, $mensagem, $headers)){
        echo "e-mail enviado";
    }else {
        echo "falha no envio do e-mail";
    };
?>