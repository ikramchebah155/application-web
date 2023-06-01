<?php 
session_start();
include('core/connection.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
 
}
// Récupérer les données médicales du patient à partir de la base de données
$sql = "SELECT f.date, m.username AS medecin_username, f.medicaments, f.analyses, f.bilan, f.symptome, f.resultat, f.regime, f.allergies
        FROM fichier AS f
        JOIN medecin AS m ON f.id_medecin = m.id
        WHERE f.id_patient = $id
        ORDER BY f.date DESC"; // Modifier la requête pour trier par date décroissante

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $medicalData = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $medicalData = array();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Le site de suivi des patients">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="patientc.css">
  <title>Patient</title>
</head>

<body>
  <header>
    <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
    <ul class="menu">
      <a href="patProfil.php"><i class="fa-regular fa-user"></i>Mon Profil</a>
      <a href="logout.php"><i class="fa-solid fa-sign-out"></i> Déconnexion</a>
    </ul>
  </header>

  <h1>Bienvenue : <?php echo $username ?></h1>
  <h2>Formulaire d'information d'un patient</h2><br><br><br><br>

  <br>
  <main>
  <table>
    <tr>
      <th>Date</th>
      <th>Médecin</th>
      <th>Médicaments</th>
      <th>Analyses</th>
      <th>Bilan</th>
      <th>Symptômes</th>
      <th>Résultats</th>
      <th>Régime</th>
      <th>Allergies</th>
    </tr>
    <?php if (empty($medicalData)) : ?>
    <tr>
        <td colspan="9">Aucune donnée médicale disponible pour ce patient.</td>
    </tr>
<?php else : ?>

    <?php foreach ($medicalData as $data) : ?>
      <tr>
        <td><?php echo $data['date']; ?></td>
        <td><?php echo $data['medecin_username']; ?></td>
        <td><?php echo $data['medicaments']; ?></td>
        <td><?php echo $data['analyses']; ?></td>
        <td><?php echo $data['bilan']; ?></td>
        <td><?php echo $data['symptome']; ?></td>
        <td><?php echo $data['resultat']; ?></td>
        <td><?php echo $data['regime']; ?></td>
        <td><?php echo $data['allergies']; ?></td>
      </tr>
    <?php endforeach; ?>
    <?php endif; ?>
  
</table>
</main>
</body>

</html>
