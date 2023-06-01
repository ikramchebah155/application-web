<?php
include('core/connection.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Supprimer le patient de la base de données en utilisant l'identifiant
    $query = "DELETE FROM `patient` WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    
    if($result) {
        // Redirection vers la page de consultation des patients après la suppression
        header("Location: consultfichieradm.php");
        exit();
    } else {
        // Gérer l'erreur de suppression
        echo "Une erreur s'est produite lors de la suppression du patient.";
    }
} else {
    // Si aucun identifiant n'est passé dans l'URL, rediriger vers la page de consultation des patients
    header("Location: consultfichieradm.php");
    exit();
}
?>
