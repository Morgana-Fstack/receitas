<?php
// Configurações do e-mail
$para = 'morganapetterlecunha@hotmail.com'; // Substitua pelo seu e-mail
$assunto = 'Novo Cadastro no Site';

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

// Validação básica (adicione mais validações conforme necessário)
if (empty($nome) || empty($email) || empty($rua) || empty($numero) || empty($cidade) || empty($estado) || empty($cep)) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit;
}

// Corpo do e-mail
$mensagem = "Novo cadastro:\n\n";
$mensagem .= "Nome: " . $nome . "\n";
$mensagem .= "Email: " . $email . "\n";
$mensagem .= "Endereço: " . $rua . ", " . $numero . " - " . $complemento . "\n";
$mensagem .= "Cidade: " . $cidade . " - " . $estado . "\n";
$mensagem .= "CEP: " . $cep;

// Cabeçalhos do e-mail
$headers = 'From: ' . $nome . ' <' . $email . '>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";

// Envia o e-mail
if (mail($para, $assunto, $mensagem, $headers)) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar a mensagem.";
}
?>