<?php
include '../config/db.php';
session_start();

if ($_SESSION['user']['role'] !== 'admin') {
    header('Location: ../pages/home.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $classe = $_POST['classe'];
    $filiere = $_POST['filiere'];

    $stmt = $pdo->prepare("INSERT INTO users (prenom, nom, username, email, password, role, classe, filiere)
                           VALUES (?, ?, ?, ?, ?, 'etudiant', ?, ?)");
    $stmt->execute([$prenom, $nom, $username, $email, $password, $classe, $filiere]);

    header('Location: ../pages/admin.php');
}
?>
