<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Gestion Étudiants</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../static/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home.php">Gestion Étudiants</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a href="home.php" class="nav-link">Accueil</a></li>
      <li class="nav-item"><a href="liste_etudiants.php" class="nav-link">Étudiants</a></li>
      <?php if(isset($_SESSION['user'])): ?>
        <?php if($_SESSION['user']['role'] === 'admin'): ?>
          <li class="nav-item"><a href="admin.php" class="nav-link">Admin</a></li>
        <?php else: ?>
          <li class="nav-item"><a href="profil.php" class="nav-link">Mon profil</a></li>
        <?php endif; ?>
        <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">Déconnexion</a></li>
      <?php else: ?>
        <li class="nav-item"><a href="connexion.php" class="nav-link">Connexion</a></li>
        <li class="nav-item"><a href="inscription.php" class="nav-link">Inscription</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<div class="container mt-4">
