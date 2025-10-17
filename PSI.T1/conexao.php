<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdpoemas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<form method="POST" action="">
    username: <input type="text" name="username" required><br>
    password: <input type="password" name="password" required><br>
    E-mail: <input type="email" name="email" required><br>
    <input type="submit" name="register" value="Register">
</form>