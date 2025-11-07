<?php include '../includes/header.php'; ?>
<h2 class="text-center mb-4">Connexion</h2>
<form method="POST" action="../actions/login.php" class="card p-4 col-md-6 mx-auto">
  <div class="mb-3">
    <label>Nom d'utilisateur</label>
    <input type="text" name="username" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Mot de passe</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button class="btn btn-dark w-100">Se connecter</button>
</form>
<?php include '../includes/footer.php'; ?>
