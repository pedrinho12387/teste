<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $to = "00001100729926sp@al.educacao.sp.gov.br"; // Substitua pelo seu e-mail
    $subject = "Mensagem de $nome";
    $message = "
    Nome: $nome\n
    E-mail: $email\n
    Mensagem: $mensagem
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar e-mail.";
    }
}
?>
