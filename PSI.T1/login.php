<?php
include 'conexao.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $username = $result->fetch_assoc();
            if (password_verify($password, $username['password'])) {
                echo "Login efetuado com sucesso!";
            } else {
                echo "Utilizador não encontrado";
            }
        } else {
            echo "Erro. " . $stmt->error;
        }
    }
}
?>

<form method="POST" action="">
    E-mail: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Login">
</form>