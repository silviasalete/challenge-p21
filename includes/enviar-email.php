<?php

    $email          = 'silvia.samtech@gmail.com';
    $destinatarios  = $_POST['destinatarios'];
    $assunto        = $_POST['assunto'];
    $mensagem       = $_POST['mensagem'];

    $headers        = "Content-Type: text/plain;charset=utf-8\r\n";
    $headers       .= "From: $email\r\n";
    $headers       .= "Reply-To: $email\r\n";
    $corpo          = $mensagem;

    $status = mail($destinatarios, mb_encode_mimeheader($assunto,"utf-8"),$corpo, $headers);

    if ($status) {
        header('Location: ../enviar-email.php?status=sucesso');
    }else{
        header('Location: ../enviar-email.php?status=erro');
    }
?>