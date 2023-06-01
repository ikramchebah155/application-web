<?php
session_start();
include('core/connection.php');

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
}

if (isset($_GET['id'])) {
  $patientId = $_GET['id'];

  // Récupérer les informations médicales du patient
  $query = "SELECT * FROM `fichier` WHERE id_patient = $patientId ORDER BY date DESC LIMIT 1";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $firstRow = mysqli_fetch_assoc($result);
  }
}

if (isset($_POST['symptomes']) && isset($_POST['resultats']) && isset($_POST['allergies'])) {
  $symptomes = $_POST['symptomes'];
  $resultats = $_POST['resultats'];
  $allergies = $_POST['allergies'];

  // Mettre à jour les données dans la table `fichier`
  $updateQuery = "UPDATE `fichier` SET symptome = '$symptomes', resultat = '$resultats', allergies = '$allergies' WHERE id_patient = $patientId ORDER BY date DESC LIMIT 1";
  $updateResult = mysqli_query($conn, $updateQuery);

  if ($updateResult) {
    // Rediriger vers la page de la fiche patient avec un message de succès
    header("Location: fichepatient.php?id=$patientId&success=1");
    exit();
  } else {
    // Rediriger vers la page de la fiche patient avec un message d'erreur
    header("Location: fichepatient.php?id=$patientId&error=1");
    exit();
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Le site de suivi des patients">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="fichepat.css">

  <title>Modifier la fiche</title>
</head>

<body>
  <header>
    <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
    <ul class="menu">
      <a href="fichepatient.php?id=<?php echo $patientId; ?>"><i class="fa-solid fa-rotate-left"></i>Retour</a>
    </ul>
  </header>

  <br><br><br><br>
  <h1>Modifier la fiche du patient - <?php echo isset($patientUsername) ? $patientUsername : ''; ?></h1>

  <div class="container">
  <form method="POST" action="enregistrer_modifications.php?id=<?php echo $patientId; ?>">
      <table>
        <tr>
          <th>Date</th>
          <th>Médicaments</th>
          <th>Analyses</th>
          <th>Bilan</th>
          <th>Symptômes</th>
          <th>Résultats</th>
          <th>Régime</th>
          <th>Allergies</th>
        </tr>
        <tr>
          <td><?php echo isset($firstRow['date']) ? $firstRow['date'] : ''; ?></td>
          <td><?php echo isset($firstRow['medicaments']) ? $firstRow['medicaments'] : ''; ?></td>
          <td><?php echo isset($firstRow['analyses']) ? $firstRow['analyses'] : ''; ?></td>
          <td><?php echo isset($firstRow['bilan']) ? $firstRow['bilan'] : ''; ?></td>
          <td><input type="text" name="symptomes" value="<?php echo isset($firstRow['symptome']) ? $firstRow['symptome'] : ''; ?>"></td>
          <td><input type="text" name="resultats" value="<?php echo isset($firstRow['resultat']) ? $firstRow['resultat'] : ''; ?>"></td>
          <td><?php echo isset($firstRow['regime']) ? $firstRow['regime'] : ''; ?></td>
          <td><input type="text" name="allergies" value="<?php echo isset($firstRow['allergies']) ? $firstRow['allergies'] : ''; ?>"></td>
        </tr>
      </table>
      <br>
      <button type="submit">Enregistrer les modifications</button>
    </form>
  </div>

</body>

</html>
