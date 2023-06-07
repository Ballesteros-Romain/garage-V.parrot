<?php
session_start(); // Démarrer la session pour conserver l'authentification

// Vérifier si l'utilisateur est authentifié en tant qu'administrateur
if ($_SESSION['role'] !== 'admin') {
  // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié en tant qu'administrateur
  header('Location: connexion.php');
  exit();
}

// Traitement du formulaire de création de compte
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Effectuer les opérations nécessaires pour créer un compte employé dans la base de données

  // Redirection ou affichage d'un message de succès
}
?>

<h2>Tableau de bord de l'administrateur</h2>
<!-- Ajoutez ici les fonctionnalités pour créer des comptes employés -->

<?php require '../php/footer.php'?>
