<?php
require_once '../Connect/Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    try {
        $stmt->execute(['username' => $username, 'password' => $hashedPassword]);
        header("Location: login.php");
    } catch (PDOException $e) {
        $e = "Tài khoản đã tồn tại!";
    }
}
?>