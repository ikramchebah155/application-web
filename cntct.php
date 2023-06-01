<?php 
session_start();//session call
include('core/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username']) )
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="consultfichiermed.css">
    
    <title>Création</title>
</head>

<body>
    <header>

        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>

        <ul class="menu">

            
        <a href="inf.php"><i class="fa-solid fa-rotate-left"></i>Retour</a>
    </ul>


    </header>
    <br><br><br><br>

    <h1>Liste des medecins</h1>
    <form method="POST" action="rechercher_med.php">
        <input type="text" name="search" placeholder="Nom du medecin">
        <button type="submit">Rechercher</button>
    </form>
<div class="container">
    <table>
        <tr>
            <th>nom de medecin</th>
            <th>email</th>
            <th>Numéro de téléphone</th>
        </tr>
        <?php 
         $res= mysqli_query($conn, "SELECT * FROM `medecin`");
         while($data= mysqli_fetch_assoc($res))
         {
           echo '<tr>';
         echo '<td>'.$data['username'].'</td>';
         echo '<td><a href="mailto:'.$data['email'].'">'.$data['email'].'</a></td>';
         echo '<td><a href="tel:'.$data['phone'].'">'.$data['phone'].'</a></td>';
         echo '</tr>';
        }
       ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body></html>