<?php include '../includes/header.php'; include '../config/db.php'; ?>
<h2 class="mb-4 text-center">Liste des étudiants</h2>
<table class="table table-striped">
  <thead><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Filière</th><th>Classe</th></tr></thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM users WHERE role='etudiant'");
    while ($e = $stmt->fetch()) {
        echo "<tr><td>{$e['id']}</td><td>{$e['nom']}</td><td>{$e['prenom']}</td><td>{$e['filiere']}</td><td>{$e['classe']}</td></tr>";
    }
    ?>
  </tbody>
</table>
<?php include '../includes/footer.php'; ?>
