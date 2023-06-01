<?php
session_start();
include('core/connection.php');

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
}

if (isset($_GET['id'])) {
  $patientId = $_GET['id'];

  if (isset($_POST['symptomes']) && isset($_POST['resultats']) && isset($_POST['allergies'])) {
    $symptomes = $_POST['symptomes'];
    $resultats = $_POST['resultats'];
    $allergies = $_POST['allergies'];

    // Mettre à jour les données dans la table `fichier`
    $updateQuery = "UPDATE `fichier` SET symptome = '$symptomes', resultat = '$resultats', allergies = '$allergies' WHERE id_patient = $patientId ORDER BY date DESC LIMIT 1";
    $updateResult = mysqli_query($conn, $updateQuery);

    header("location:fiche_patinf.php?id=$patientId");
  }
}
?>
