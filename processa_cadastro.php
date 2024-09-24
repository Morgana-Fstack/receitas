<?php
// Configuração para envio de e-mail (ajuste as informações de acordo com seu servidor SMTP)
$to = "seu_email@example.com";
$subject = "Novo Cadastro";

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$Endereço = $_POST['Endereço'];
// ... outros campos ...

// Montando o corpo do e-mail
$message = "Novo cadastro:\n\n";
$message .= "Nome: " . $nome . "\n";
$message .= "Email: " . $email . "\n";
$message .= "Endereço: " . $endereço . "\n";
// ... outros campos ...

// Headers do e-mail
$headers = "From: Seu Nome <seu_email@example.com>\r\n";
$headers .= "Reply-To: $email";

if (mail($to, $subject, $message, $headers)) {
    echo '<script>
        alert("Cadastro realizado com sucesso! Um e-mail de confirmação foi enviado para o seu endereço.");
        window.location.href = "pagina_de_agradecimento.html"; // Redireciona para uma página de agradecimento
    </script>';
} else {
    echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
}