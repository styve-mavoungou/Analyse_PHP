<?php
include '../config/db.php';

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
    try {
        $stmt->execute([$prenom, $nom, $username, $email, $password, $classe, $filiere]);
        echo "<script>alert('Inscription réussie ! Vous pouvez maintenant vous connecter.');
              window.location.href='../pages/connexion.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erreur : Nom d’utilisateur ou email déjà utilisé.');window.history.back();</script>";
    }
}
?>
