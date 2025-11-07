<?php include '../includes/header.php'; include '../config/db.php';
if ($_SESSION['user']['role'] !== 'admin') { header('Location: home.php'); exit; }
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$et = $stmt->fetch();
?>
<h2 class="text-center mb-4">Modifier un étudiant</h2>
<form method="POST" action="../actions/update_student.php" class="card p-4 col-md-8 mx-auto">
  <input type="hidden" name="id" value="<?= $et['id'] ?>">
  <div class="row">
    <div class="col-md-6 mb-3"><label>Prénom</label><input type="text" name="prenom" value="<?= $et['prenom'] ?>" class="form-control"></div>
    <div class="col-md-6 mb-3"><label>Nom</label><input type="text" name="nom" value="<?= $et['nom'] ?>" class="form-control"></div>
  </div>
  <div class="mb-3"><label>Email</label><input type="email" name="email" value="<?= $et['email'] ?>" class="form-control"></div>
  <div class="row">
    <div class="col-md-6 mb-3"><label>Classe</label><input type="text" name="classe" value="<?= $et['classe'] ?>" class="form-control"></div>
    <div class="col-md-6 mb-3"><label>Filière</label><input type="text" name="filiere" value="<?= $et['filiere'] ?>" class="form-control"></div>
  </div>
  <button class="btn btn-warning w-100">Mettre à jour</button>
</form>
<?php include '../includes/footer.php'; ?>
