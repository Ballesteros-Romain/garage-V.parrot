<?php
require '../php/header.php';

// Vérification des informations de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connexion à la base de données (assurez-vous d'ajuster les paramètres selon votre configuration)
  $conn = mysqli_connect('localhost:8889', 'root', 'root', 'Garage Parrot');
  if (!$conn) {
    die('Erreur de connexion à la base de données: ' . mysqli_connect_error());
  }

  // Vérification des identifiants de connexion
  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Les identifiants sont valides
    $user = mysqli_fetch_assoc($result);

    if ($user['role'] === 'admin' && $email === 'vincent.parrot@mail.fr' && $password === 'admin') {
      // Redirection vers la page admin_dashboard.php pour l'administrateur
      header('Location: admin_dashboard.php');
      exit();
    } elseif ($user['role'] === 'employee') {
      // Redirection vers la page employee_dashboard.php pour l'employé
      header('Location: employee_dashboard.php');
      exit();
    }
  } else {
    // Identifiants invalides, affichage d'un message d'erreur
    echo 'Identifiants de connexion invalides.';
  }

  // Fermeture de la connexion à la base de données
  mysqli_close($conn);
}
?>

<h2>Connexion</h2>
<div class="form-i">
  <form class="inscription" method="POST" action="connexion.php">
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email"><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Se connecter">
  </form>
</div>

<?php require '../php/footer.php'?>
