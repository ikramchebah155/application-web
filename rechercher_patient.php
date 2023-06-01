
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
    <link rel="stylesheet" href="consultfichiermed.css">
    <title>Rechercher Patient</title>
</head>

<body>
    <header>
        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
        <ul class="menu">
            <a href="consultfichiermed.php"><i class="fa-solid fa-rotate-left"></i>Retour</a>
        </ul>
    </header>

    <br><br><br><br>
    <br><br><br><br>

    <br><br><br><br>

    

    <div class="container">
        <table>
            <tr>
                <th>nom d'utilisateur</th>
                <th>compte patient</th>
                <th>Fiche patient</th>
            </tr>
            <?php
            if(isset($result) && mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'.$data['username'].'</td>';
                    echo '<td><a href="compte_patient.php?id='.$data['id'].'">Voir le compte</a></td>';
                    echo '<td><a href="fiche_patient.php?id='.$data['id'].'">Voir la fiche</a></td>';
                    echo '</tr>';
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
