<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <form method="POST" action="inscription.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" name="date_naissance" id="date_naissance" required><br>

        <label for="lieu_naissance">Lieu de naissance :</label>
        <input type="text" name="lieu_naissance" id="lieu_naissance" required><br>

        <label for="genre">Genre :</label>
        <select name="genre" id="genre" required>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select><br>

        <label for="niveau_etude">Niveau d'étude :</label>
        <input type="text" name="niveau_etude" id="niveau_etude" required><br>

        <label for="ref_cnib">Référence CNIB :</label
