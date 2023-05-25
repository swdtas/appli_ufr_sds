<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo1.png" type="images/xicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>liste</title>
</head>
<body>
<header>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid ">
      <div >
      <a class="navbar-brand" href="#">
        <img src="images/logo.jpeg" alt="" width="100"style=" border-radius: 10px;" height="80" class="d-inline-block align-text-top">
        <h4 class="d-inline-block align-text-top text-white pt-3 ">Université-Joseph-Ki-Zerbo <br class="align-text-center">UFR: Sciences de la santé</h4> 
      </a>
    </div>
      <div >
       <a href="/gesta/enregistrement.php"><button type="button" name class="btn btn-outline-warning">Inscription</button></a>
      </div>
      <div>
      <a href="/gesta/liste.php"><button type="button" name class="btn btn-outline-warning">Consulter la liste</button></a>
      </div>
      <div>
      <a href="/gesta/index.php"><button type="button" name class="btn btn-outline-warning">Déconnexion</button></a>
      </div>
    </div>
  </nav>
</header>
<main>
<div class="table_etudiant">
<table>
    <tr class="ligne1">
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
    $sql = "SELECT nom, prenom, date_naissance, genre, date_inscription, contact FROM etudiant";
    $result = $connect->query($sql);

    if ($result->rowCount() > 0) {
        // Afficher les données dans le tableau
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
        echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
    }

    // Fermer la connexion à la base de données
    $connect = null;
    ?>
</table>
</div>
</main>
<footer >
      <div class="row ">
        <div class="container-fluid">
        <p class=" pt-2 text-center text-white">© 2023 - Gesta - Université-Joseph-Ki-Zerbo - UFR/SDS </p>
      </div>       
     </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>
</html>
