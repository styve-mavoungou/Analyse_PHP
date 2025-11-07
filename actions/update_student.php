<?php
include '../config/db.php';
session_start();

if ($_SESSION['user']['role'] !== 'admin') {
    header('Location: ../pages/home.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $classe = $_POST['classe'];
    $filiere = $_POST['filiere'];

    $stmt = $pdo->prepare("UPDATE users SET prenom=?, nom=?, email=?, classe=?, filiere=? WHERE id=?");
    $stmt->execute([$prenom, $nom, $email, $classe, $filiere, $id]);

    header('Location: ../pages/admin.php');
}
?>
