<?php
session_start();
include('core/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
}

if(isset($_GET['id'])) {
  $patientId = $_GET['id'];
  
  // Récupérer les informations du patient
  $query = "SELECT * FROM `patient` WHERE id = $patientId";
  $result = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($result) > 0) {
    $patientData = mysqli_fetch_assoc($result);
    
    // Récupérer les informations médicales du patient
    $medicalQuery = "SELECT * FROM `fichier` WHERE id_patient = $patientId ORDER BY date DESC";
    $medicalResult = mysqli_query($conn, $medicalQuery);
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

  <title>Fiche Patient</title>
</head>

<body>
  <header>
    <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
    <ul class="menu">
      <a href="consultfichiermed.php"><i class="fa-solid fa-rotate-left"></i>Retour</a>
    </ul>
  </header>

  <br><br><br><br>
  <h1>Fiche du patient - <?php echo $patientData['username']; ?></h1>

  <div class="container">
  <a href="nouvelle_fiche.php?id=<?php echo $patientId; ?>" class="add-icon">
        <i class="fas fa-plus-circle"></i> Ajouter une nouvelle fiche
    </a>
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
      <?php
      if(isset($medicalResult) && mysqli_num_rows($medicalResult) > 0) {
        while ($medicalData = mysqli_fetch_assoc($medicalResult)) {
          echo '<tr>';
          echo '<td>' . $medicalData['date'] . '</td>';
          echo '<td>' . $medicalData['medicaments'] . '</td>';
          echo '<td>' . $medicalData['analyses'] . '</td>';
          echo '<td>' . $medicalData['bilan'] . '</td>';
          echo '<td>' . $medicalData['symptome'] . '</td>';
          echo '<td>' . $medicalData['resultat'] . '</td>';
          echo '<td>' . $medicalData['regime'] . '</td>';
          echo '<td>' . $medicalData['allergies'] . '</td>';
          echo '</tr>';
        }
      } else {
        echo '<tr><td colspan="9">Aucune information médicale disponible.</td></tr>';
      }
      ?>
    </table>
  </div>

</body>

</html>
