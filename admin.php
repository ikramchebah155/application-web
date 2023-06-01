<?php 
session_start();//session call
include('core/connection.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
  $id= $_SESSION['id'];
  $username = $_SESSION['username'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="le site de suivre des ptients ">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/admin.css">
  <title>Admin</title>
</head>

<body>
  <header>

    <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
    <ul class="menu">
         
    <a href="logout.php"><i class="fa-solid fa-sign-out"></i> Déconnexion</a>
    
         </ul>
    

  </header>
  <h1>Bienvenue : <?php echo $username ?></h1>

  <div class="container">
    <div class="card" style="width: 18rem;">
      <img src="images/ph4.jpg" class="card-img-top" alt="..." style="height: 220px;">
      <div class="card-body">
        <h5 class="card-title"> Créer fichier</h5>
        <p class="card-text">Vous pouvez ajouter des fichiers de patients facillement grace a cette fonctionnalite.</p>
        <a href="creerfichier.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a></a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="images/ph5.jpg" class="card-img-top" alt="..." style="height: 220px;">
      <div class="card-body">
        <h5 class="card-title">Consulter liste des patients</h5>
        <p class="card-text">Veuillez verifier la liste des patients ici.</p><br>
        <a href="consultfichieradm.php" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="images/ph6.jpg" class="card-img-top" alt="..." style="height: 220px;">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 18px;">Consulter l'emploi des médecin</h5>
        <p class="card-text">Voici l'horaire actualise des medecins de garde.</p><br>
        <a href="emploiadm.php" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
      </div>
    </div>
  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>