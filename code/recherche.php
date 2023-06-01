<?php
session_start();
    if (!isset($_SESSION['password'])) {
        header('Location: index.php');
        exit;
    }

    include('connexion_base.php');
// Récupérer la valeur de recherche
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Modifier votre requête SQL pour inclure la clause WHERE avec le filtre de recherche
$sql = "SELECT nom, prenom, date_naissance, genre, date_inscription, personne_besoin FROM etudiant WHERE nom LIKE :search OR prenom LIKE :search";
$stmt = $connect->prepare($sql);
$stmt->bindValue(':search', '%' . $search . '%');
$stmt->execute();
// Récupérer la valeur de recherche
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Modifier votre requête SQL pour inclure la clause WHERE avec le filtre de recherche
$sql = "SELECT nom, prenom, date_naissance, genre, date_inscription, personne_besoin FROM etudiant WHERE nom LIKE :search OR prenom LIKE :search";
$stmt = $connect->prepare($sql);
$stmt->bindValue(':search', '%' . $search . '%');
$stmt->execute();
?>

