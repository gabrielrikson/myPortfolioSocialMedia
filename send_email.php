<?php
session_start(); // Remover se não for necessário

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Validação básica
    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Por favor, preencha todos os campos corretamente."]);
        exit;
    }

    $to = "gabrielrikson.oi@gmail.com"; // Seu email
    $subject = "Nova mensagem de $name";
    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
    
    // Melhorando os headers de email
    $headers = "From: no-reply@seudominio.com\r\n"; 
    $headers .= "Reply-To: $email\r\n"; 
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; 

    // Envio do email
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Mensagem enviada com sucesso! Obrigado por entrar em contato."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Falha ao enviar a mensagem. Tente novamente mais tarde."]);
    }
}
?>
