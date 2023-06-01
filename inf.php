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
    <link rel="stylesheet" href="inf.css">
    <title>Infermier</title>
</head>

<body>
    <header>

        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>

        <ul class="menu">
         
        <a href="logout.php"><i class="fa-solid fa-sign-out"></i> Déconnexion</a>
             </ul>

    </header>
    <h1>Bienvenue :<?php echo $username ?></h1>
    <a href="cntct.php" class="btn-cntct"><i class="fa-solid fa-message"></i> Contacter médecin</a>
<br><br><br>
    <div class="container">
        
       
        <div class="card" style="width: 18rem;">
          <img src="images/pp5.jpg" class="card-img-top" alt="..." style="height: 220px;">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 18px;"> Remplire les fichies des patients</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="consultfichierinf.php" class="btn btn-primary"><i class="fa-regular fa-rectangle-list"></i></a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="images/pp6.jpg" class="card-img-top" alt="..." style="height: 220px;">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 18px;">Voir emplois du temps médecin</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="emploimed_inf.php" class="btn btn-primary"><i class="fa-solid fa-calendar-days"></i></a>
          </div>
        </div>
      </div>
  

       
            
        



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>