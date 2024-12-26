<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    // Aqui você pode adicionar lógica para salvar os dados ou enviar um email
    echo "Obrigado, $nome! Entraremos em contato pelo email $email.";
}
?>
