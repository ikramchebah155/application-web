<?php
session_start();
include('core/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
  $id = $_SESSION['id'];
  $username = $_SESSION['username'];
}

if(isset($_GET['id'])) {
    $patientId = $_GET['id'];
    $query = "SELECT * FROM `patient` WHERE id = $patientId";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $patientData = mysqli_fetch_assoc($result);
    } 
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
    <title>Compte Patient</title>
</head>

<body>
    <header>
        <div class="logo"><i class="fa-solid fa-bed-pulse"></i> <span>Care</span>Med clinic </div>
        <ul class="menu">
            <a href="consultfichiermed.php"><i class="fa-solid fa-rotate-left"></i>Retour</a>
        </ul>
    </header>

    <br><br><br><br>
    <h1>Compte du patient</h1>
    
    <div class="container">
        <h2>Informations du patient</h2>
        <table>
            <tr>
                <td><strong>Nom d'utilisateur:</strong></td>
                <td><?php echo $patientData['username']; ?></td>
            </tr>
            <tr>
                <td><strong>Email:</strong> </td>
                <td><?php echo $patientData['email']; ?></td>
            </tr>
            <tr>
                <td><strong>Date de naissance:</strong> 
                <td><?php echo $patientData['birthday']; ?></td>
            </tr>
            <tr>
                <td><strong>Sexe:</strong> 
                <td><?php echo $patientData['gender']; ?></td>
            </tr>
            <tr>
                <td><strong>Numero de telephone:</strong> 
                <td><?php echo $patientData['phone']; ?></td>
            </tr>
            <tr>
                <td><strong>Adresse:</strong> 
                <td><?php echo $patientData['adresse']; ?></td>
            </tr>
            <tr>
                <td><strong>Service:</strong> 
                <td><?php echo $patientData['service']; ?></td>
            </tr>
            <tr>
                <td><strong>Personne a connecter en cas d'urgance:</strong> 
                <td><?php echo $patientData['curg']; ?></td>
            </tr>
            <tr>
                <td><strong>Numero  a connecter en cas d'urgance:</strong> 
                <td><?php echo $patientData['nurg']; ?></td>
            </tr>
            <tr>
                <td><strong>Relation avec le personne  a connecter en cas d'urgance:</strong> 
                <td><?php echo $patientData['rurg']; ?></td>
            </tr>



        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
