<?php
session_start();
include('core/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
}

if(isset($_POST['search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $query = "SELECT * FROM `patient` WHERE username LIKE '%$search%'";
    $result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="le site de suivre des patients">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="listeadm.css">
    <title>Rechercher Patient</title>
</head>

<body>
    <header>
        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
        <ul class="menu">
            <a href="consultfichieradm.php"><i class="fa-solid fa-rotate-left"></i>Retour</a>
        </ul>
    </header>

    <br><br><br><br>
    

    <div class="container">
        <table>
        <tr>
            <th scope="col">Nom d'utilisateur</th>
            <th scope="col">E-mail</th>
            <th scope="col">Sexe</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Numero de telephone</th>
            <th scope="col">Adresse</th>
            <th scope="col">Service</th>
            <th scope="col">Personne a connecter en cas d'urgance</th>
            <th scope="col">Numero  a connecter en cas d'urgance</th>
            <th scope="col">Relation avec le personne  a connecter en cas d'urgance</th>
            <th scope="col"> Suprrimer</th>
        </tr>
            <?php
            if(isset($result) && mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'.$data['username'].'</td>';
         echo '<td>'.$data['email'].'</td>';
         echo '<td>'.$data['gender'].'</td>';
         echo '<td>'.$data['birthday'].'</td>';
         echo '<td>'.$data['phone'].'</td>';
         echo '<td>'.$data['adresse'].'</td>';
         echo '<td>'.$data['service'].'</td>';
         echo '<td>'.$data['curg'].'</td>';
         echo '<td>'.$data['nurg'].'</td>';
         echo '<td>'.$data['rurg'].'</td>';
         echo '<td><a href="delete.php?id='.$data['id'].'"><button name="delete-button" class="delete-button"><i class="fa-solid fa-trash"></i></button></a></td>';
         echo'</td>';
                }
            } else {
                echo '<tr><td colspan="3">Aucun patient trouvé.</td></tr>';
            }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</
