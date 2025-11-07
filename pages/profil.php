<?php include '../includes/header.php';
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'etudiant') {
    header('Location: home.php');
    exit;
}
$user = $_SESSION['user'];
?>
<h2 class="text-center mb-4">Mon Profil</h2>
<div class="card col-md-6 mx-auto p-4">
  <p><strong>Nom :</strong> <?= $user['nom'] ?></p>
  <p><strong>Prénom :</strong> <?= $user['prenom'] ?></p>
  <p><strong>Email :</strong> <?= $user['email'] ?></p>
  <p><strong>Classe :</strong> <?= $user['classe'] ?></p>
  <p><strong>Filière :</strong> <?= $user['filiere'] ?></p>
  <p><strong>Date d’inscription :</strong> <?= $user['date_inscription'] ?></p>
</div>
<?php include '../includes/footer.php'; ?>
