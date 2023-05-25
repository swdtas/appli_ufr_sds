<!DOCTYPE html>
<html>
<head>
    <title>Affichage des données</title>
</head>
<body>

<h1>Données enregistrées :</h1>

<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Genre</th>
        <th>Date d'inscription</th>
        <th>Contact</th>
    </tr>

    <?php
    // Connexion à la base de données
    session_start();
    if(!$_SESSION['password']){
      header('Location:index.php');
    }
    include('connexion_base.php');

    // Récupérer les données de la base de données
    $sql = "SELECT nom, prenom, date_naissance, genre, date_inscription, contact FROM table_utilisateurs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Afficher les données dans le tableau
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["nom"]."</td>";
            echo "<td>".$row["prenom"]."</td>";
            echo "<td>".$row["date_naissance"]."</td>";
            echo "<td>".$row["genre"]."</td>";
            echo "<td>".$row["date_inscription"]."</td>";
            echo "<td>".$row["contact"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "Aucune donnée trouvée.";
    }

    // Fermer la connexion à la base de données
    $conn->close();
    ?>
</table>

</body>
</html>
