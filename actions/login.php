<?php
include '../config/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && hash('sha256', $password) === $user['password']) {
        $_SESSION['user'] = $user;
        if ($user['role'] === 'admin') {
            header('Location: ../pages/admin.php');
        } else {
            header('Location: ../pages/profil.php');
        }
        exit;
    } else {
        echo "<script>alert('Nom d’utilisateur ou mot de passe incorrect');window.history.back();</script>";
    }
}
?>
