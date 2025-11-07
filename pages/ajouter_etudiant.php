<?php include '../includes/header.php';
if ($_SESSION['user']['role'] !== 'admin') { header('Location: home.php'); exit; }
?>
<h2 class="text-center mb-4">Ajouter un étudiant</h2>
<form method="POST" action="../actions/add_student.php" class="card p-4 col-md-8 mx-auto">
  <div class="row">
    <div class="col-md-6 mb-3"><label>Prénom</label><input type="text" name="prenom" class="form-control" required></div>
    <div class="col-md-6 mb-3"><label>Nom</label><input type="text" name="nom" class="form-control" required></div>
  </div>
  <div class="mb-3"><label>Nom d'utilisateur</label><input type="text" name="username" class="form-control" required></div>
  <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
  <div class="mb-3"><label>Mot de passe</label><input type="password" name="password" class="form-control" required></div>
  <div class="row">
    <div class="col-md-6 mb-3"><label>Classe</label><input type="text" name="classe" class="form-control"></div>
    <div class="col-md-6 mb-3">
      <label>Filière</label>
      <select name="filiere" class="form-control">
        <option>Informatique</option>
        <option>Génie Logiciel</option>
        <option>Réseaux et Télécom</option>
        <option>Data Science</option>
        <option>Cybersécurité</option>
      </select>
    </div>
  </div>
  <button class="btn btn-success w-100">Ajouter</button>
</form>
<?php include '../includes/footer.php'; ?>
