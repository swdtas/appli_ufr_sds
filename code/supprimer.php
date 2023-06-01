<?php
// Connexion à la base de données
session_start();
if(!$_SESSION['password']){
  header('Location:index.php');
}
include('connexion_base.php');

// Vérifier si l'identifiant de l'étudiant à supprimer est présent dansla base de données
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Requête de suppression dans la base de données
    $sql = "DELETE FROM etudiant WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirection vers la page de liste après la suppression
    header('Location: liste.php');
    exit();
} else {
    // Si l'identifiant n'est pas spécifié, rediriger l'utilisateur vers la page de liste
    header('Location: liste.php');
    exit();
}

// Fermer la connexion à la base de données
$connect = null;
?>
