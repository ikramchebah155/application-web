<?php
session_start();
include('core/connection.php');

if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Information médicale - John Doe</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        
    </header>
    <main>
    <table>
            <tr>
                <th>Nom du patient</th>
                <th>Médecin</th>
                <th>Date</th>
                <th>Heure</th>
            </tr>
            <?php 
            $res = mysqli_query($conn, "SELECT * FROM `fichier`");
            while($data = mysqli_fetch_assoc($res))
            {
                echo '<tr>';
                echo '<td>'.$data['patient'].'</td>';
                echo '<td>'.$data['medecin'].'</td>';
                echo '<td>'.$data['date'].'</td>';
                echo '<td>'.$data['heure'].'</td>';
                echo '</tr>';
            }
            ?>
        </table>
        <h2>Consultations</h2>
        <table>

            <thead>
                <tr>
                    <th>Date</th>
                    <th>Médecin</th>
                    <th>Symptômes</th>
                    <th>Diagnostic</th>
                    <th>Prescription</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01/01/2022</td>
                    <td>Dr. Dupont</td>
                    <td>Maux de tête, fièvre</td>
                    <td>Grippe</td>
                    <td>Acétaminophène</td>
                </tr>
                <tr>
                    <td>01/15/2022</td>
                    <td>Dr. Tremblay</td>
                    <td>Malaise, fatigue</td>
                    <td>Anémie</td>
                    <td>Fer</td>
                </tr>
            </tbody>
        </table>
        <h2>Prescriptions</h2>
        <ul>
            <li>Acétaminophène - 500mg, 2 comprimés toutes les 4 heures pour soulager les maux de tête</li>
            <li>Fer - 325mg, 1 comprimé par jour pour traiter l'anémie</li>
        </ul>
        <h2>Ordonnances</h2>
        <ul>
            <li>Tests sanguins pour vérifier les niveaux de fer</li>
        </ul>
    </main>
    <footer>
        <p>© 2022 Clinique Médicale XYZ</p>
    </footer>
</body>
</html>
