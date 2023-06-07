<?php
session_start();

// Vérifier si l'utilisateur est connecté en tant qu'employé
if (!isset($_SESSION['user_email']) || $_SESSION['user_role'] !== 'employee') {
  header("Location: connexion.php");
  exit();
}

require '../php/header.php';

// Code spécifique à la page du tableau de bord de l'employé
$employeeId = $_SESSION['employee_id'];

?>
<h2>bienvenue employé 1</h2>
<!-- Contenu du tableau de bord de l'employé -->

<?php require '../php/footer.php'?>
