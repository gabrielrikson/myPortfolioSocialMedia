<?php
$to = "gabrielrikson.oi@gmail.com"; // Substitua pelo seu email
$subject = "Teste de Envio de Email";
$message = "Este é um teste de envio de email.";
$headers = "From: gabrielrikson.oi@gmail.com"; // Substitua pelo seu email

if (mail($to, $subject, $message, $headers)) {
    echo "Email enviado com sucesso!";
} else {
    echo "Falha ao enviar email.";
}
?>
