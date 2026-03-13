<?php
session_start();
require 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $stmt = $pdo->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $row = $stmt->fetch();
    if ($row && password_verify($password, $row["password"])) {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials";
    }
}
?>
