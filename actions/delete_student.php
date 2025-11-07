<?php
include '../config/db.php';
session_start();

if ($_SESSION['user']['role'] !== 'admin') {
    header('Location: ../pages/home.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM users WHERE id=?");
    $stmt->execute([$id]);
    header('Location: ../pages/admin.php');
}
?>
