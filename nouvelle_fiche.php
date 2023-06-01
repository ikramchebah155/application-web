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
    
    // Récupérer les infirmiers
    $infirmierQuery = "SELECT * FROM `infermier`";
    $infirmierResult = mysqli_query($conn, $infirmierQuery);
  }
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $infirmierId = $_POST['infirmier'];
  $date = $_POST['date'];
  $medicaments = $_POST['medicaments'];
  $analyses = $_POST['analyses'];
  $bilan = $_POST['bilan'];
  $symptomes = $_POST['symptomes'];
  $resultats = $_POST['resultats'];
  $regime = $_POST['regime'];
  $allergies = $_POST['allergies'];
  
  $insertQuery = "INSERT INTO `fichier` (id_patient, id_medecin, id_infermie, date, medicaments, analyses, bilan, symptome, resultat, regime, allergies) VALUES ('$patientId', '$id', '$infirmierId', '$date', '$medicaments', '$analyses', '$bilan', '$symptomes', '$resultats', '$regime', '$allergies')";
  
  if(mysqli_query($conn, $insertQuery)) {
    header("Location: fiche_patient.php?id=$patientId");
    exit();
  } else {
    echo "Erreur lors de l'ajout de la nouvelle fiche médicale : " . mysqli_error($conn);
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
  <link rel="stylesheet" href="nouvelle_fiche.css">

  <title>Fiche Patient</title>
</head>

<body>
  <header>
    <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
    <ul class="menu">
    <a href="fiche_patient.php?id=<?php echo $patientData['id']; ?>"><i class="fa-solid fa-rotate-left"></i>Retour</a>
    </ul>
  </header>

  <br>
  <h1>Fiche du patient - <?php echo $patientData['username']; ?></h1>

  <div class="container">
    
    <form method="POST" action="">
      <input type="hidden" name="patient_id" value="<?php echo $patientId; ?>">
      <div class="form-group">
        <label for="infirmier">Infirmier :</label>
        <select name="infirmier" id="infirmier" required>
          <?php
          while($infirmierData = mysqli_fetch_assoc($infirmierResult)) {
            echo '<option value="'.$infirmierData['id'].'">'.$infirmierData['username'].'</option>';
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date :</label>
        <input type="date" name="date" id="date" required>
      </div>
      <div class="form-group">
        <label for="medicaments">Médicaments :</label>
        <textarea name="medicaments" id="medicaments" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="analyses">Analyses :</label>
        <textarea name="analyses" id="analyses" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="bilan">Bilan :</label>
        <textarea name="bilan" id="bilan" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="regime">Régime :</label>
        <textarea name="regime" id="regime" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="symptomes">Symptômes :</label>
        <textarea name="symptomes" id="symptomes" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="resultats">Résultats :</label>
        <textarea name="resultats" id="resultats" rows="3"></textarea>
      </div>
      
      <div class="form-group">
        <label for="allergies">Allergies :</label>
        <textarea name="allergies" id="allergies" rows="3"></textarea>
      </div>
      <button type="submit">Enregistrer</button>
    </form>
  </div>

</body>

</html>
