<?php
// Connexion à la base de données
session_start();
if (!$_SESSION['password']) {
    header('Location:index.php');
    exit();
}
include('connexion_base.php');

// Vérifier si l'identifiant de l'étudiant à modifier est présent dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations de l'étudiant à partir de la base de données
    $sql = "SELECT * FROM etudiant WHERE id = :id";
    $requete = $connect->prepare($sql);
    $requete->bindParam(':id', $id);
    $requete->execute();
    $row = $requete->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Le formulaire de modification est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Appeler la fonction pour mettre à jour les informations de l'étudiant
            updateEtudiant($connect, $id);
        }

        // Afficher le formulaire de modification avec les valeurs actuelles
        showUpdateForm($row);
    } else {
        // Si l'étudiant n'est pas trouvé, rediriger l'utilisateur vers la page de liste
        header('Location: liste.php');
        exit();
    }
} else {
    // Si l'identifiant n'est pas spécifié, rediriger l'utilisateur vers la page de liste
    header('Location: liste.php');
    exit();
}

// Fonction pour mettre à jour les informations de l'étudiant dans la base de données
function updateEtudiant($connect, $id) {
    // Récupérer les valeurs modifiées du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['date_naissance'];
    $genre = $_POST['genre'];
    $dateInscription = $_POST['date_inscription'];
    $personne_besoin = $_POST['personne_besoin'];

    // Mettre à jour les informations de l'étudiant dans la base de données
    $sql = "UPDATE etudiant SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, genre = :genre, date_inscription = :date_inscription, personne_besoin = :personne_besoin WHERE id = :id";
    $requete = $connect->prepare($sql);
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':date_naissance', $dateNaissance);
    $requete->bindParam(':genre', $genre);
    $requete->bindParam(':date_inscription', $dateInscription);
    $requete->bindParam(':personne_besoin', $personne_besoin);
    $requete->bindParam(':id', $id);
    $requete->execute();

    // Redirection vers la page de liste après la modification
    header('Location: liste.php');
    exit();
}

// Fonction pour afficher le formulaire de modification avec les valeurs actuelles
function showUpdateForm($row) {
    ?>
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
    <title>Modifier</title>
</head>
<body>
<?php  include('header.php');?>
<main>
<section id="Modifier" class="enregist">
    <div class="row">
        <div class="text-center">
        <h5 class=" display-6 pt-2 text-sm-left "> Modifier les données de  l'étudiant:</h5>
        </div>
    </div>
      
        <form class="form2" method="POST" action="">
            <label for="nom">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" value="<?php echo $row['nom']; ?>"><br>

            <label for="prenom">Prénom(s) :</label>
            <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>"><br>

            <label for="date_naissance">Date de naissance :</label>
            <input type="text" name="date_naissance" value="<?php echo $row['date_naissance']; ?>"><br>

            <label for="genre">Genre :</label>
            <input type="text" name="genre" value="<?php echo $row['genre']; ?>"><br>

            <label for="date_inscription">Date d'inscription :</label>
            <input type="text" name="date_inscription" value="<?php echo $row['date_inscription']; ?>"><br>

            <label for="personne_besoin">personne en cas de besoin :</label>
            <input type="text" name="personne_besoin" value="<?php echo $row['personne_besoin']; ?>"><br>

            <input type="submit" onclick="return confirm('Voulez vous vraiment modifier')" value="Modifier">
        </form>
</section> 
 </main>
       <?php  include('footer.php');?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
    
</body>
</html>
    <?php
}
