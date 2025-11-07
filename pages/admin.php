<?php include '../includes/header.php'; include '../config/db.php';
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: home.php');
    exit;
}
?>
<h2 class="text-center mb-4">Tableau de bord administrateur</h2>
<a href="ajouter_etudiant.php" class="btn btn-success mb-3">➕ Ajouter un étudiant</a>
<table class="table table-bordered">
  <thead><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Classe</th><th>Filière</th><th>Actions</th></tr></thead>
  <tbody>
    <?php
    $stmt = $pdo->query("SELECT * FROM users WHERE role='etudiant'");
    while ($et = $stmt->fetch()) {
        echo "<tr>
                <td>{$et['id']}</td>
                <td>{$et['nom']}</td>
                <td>{$et['prenom']}</td>
                <td>{$et['email']}</td>
                <td>{$et['classe']}</td>
                <td>{$et['filiere']}</td>
                <td>
                  <a href='modifier_etudiant.php?id={$et['id']}' class='btn btn-warning btn-sm'>Modifier</a>
                  <a href='../actions/delete_student.php?id={$et['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Supprimer cet étudiant ?');\">Supprimer</a>
                </td>
              </tr>";
    }
    ?>
  </tbody>
</table>
<?php include '../includes/footer.php'; ?>
