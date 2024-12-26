<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    // Aqui você pode adicionar lógica para salvar os dados ou enviar um email
    echo "Obrigado, $nome! Entraremos em contato pelo email $email.";
}
?>

require 'config.php';

// Criar a tabela se não existir
$db->exec("CREATE TABLE IF NOT EXISTS contatos (
    id INTEGER PRIMARY KEY,
    nome TEXT,
    email TEXT
)");

// Inserir dados no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);

    $stmt = $db->prepare("INSERT INTO contatos (nome, email) VALUES (:nome, :email)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Dados inseridos com sucesso!";
}
?>