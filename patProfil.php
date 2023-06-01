<?php 
session_start();//session call
include('core/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username']) )
{
  $id= $_SESSION['id'];
  $username = $_SESSION['username'];
  
}

$info = mysqli_query($conn, "SELECT * FROM patient WHERE username='$username'");
$data = mysqli_fetch_array($info);
$birthday = $data['birthday'];
$gender = $data['gender'];
$adresse = $data['adresse'];
$phone = $data['phone'];
$email = $data['email'];
$service = $data['service'];

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
  <link rel="stylesheet" href="css/patProfil.css">
  <title>Profile</title>
</head>

<body>
  <header>

    <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>

    <ul class="menu">

      
      
      <a href="patient.php"><i class="fa-solid fa-rotate-left"></i>Retour</a>
      
    </ul>


  </header>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <main>
  
    <table>
      
      <tr>
        <td>Usernam :</td>
        <td><?php echo $username ?></td>
       
      
      </tr>
      <tr>
        <td>Date de naissance :</td>
        <td> <?php echo $birthday ?></td>
      </tr>
      <tr>
        <td>Sexe :</td>
        <td><?php echo $gender ?></td>
      </tr>
      <tr>
        <td>Adresse :</td>
        <td><?php echo $adresse ?></td>
      </tr>
      <tr>
        <td>Téléphone :</td>
        <td><?php echo $phone ?></td>
      </tr>
      <tr>
        <td>E-mail :</td>
        <td><?php echo $email ?>
      <tr>
        <td>Service:</td>
        <td><?php echo $service ?></td>
      </tr>
    </table>
   


  </main>
</body>

</html>