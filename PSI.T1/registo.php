<?php
include 'conexao.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_harsh($_POST['password'],PASSWORD_DEFAULT); 
    $email = $_POST['email'];
    $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute() === TRUE) {
        echo "Reegisto efetuado com sucesso!";
    } else {
        echo "Erro. " . $stmt->error;
    }
}
?>