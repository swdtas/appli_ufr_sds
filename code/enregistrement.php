<?php
    session_start();
    if (!isset($_SESSION['password'])) {
        header('Location: index.php');
        exit;
    }

    include('connexion_base.php');
 // Récupérer la dernière valeur auto-incrémentée
    $prefix = 'E';   
    $year = date('Y');
    $last_id =NULL; 
    if (isset($_POST['enregistre'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date_naissance = $_POST['date_naissance'];
        $genre = $_POST['genre'];
        $date_inscription = $_POST['date_inscription'];
        $personne_besoin = $_POST['personne_besoin'];          
        $id_format = $prefix . $year .str_pad($last_id, 5, '0', STR_PAD_LEFT) ;    
        $query = "INSERT INTO etudiant (ine, nom, prenom, date_naissance, genre, date_inscription, personne_besoin)
                  VALUES (:ine, :nom, :prenom, :date_naissance, :genre, :date_inscription, :personne_besoin)";

        $query_run = $connect->prepare($query);
        $query_run->bindParam(':ine', $id_format);
        $query_run->bindParam(':nom', $nom);
        $query_run->bindParam(':prenom', $prenom);
        $query_run->bindParam(':date_naissance', $date_naissance);
        $query_run->bindParam(':genre', $genre);
        $query_run->bindParam(':date_inscription', $date_inscription);
        $query_run->bindParam(':personne_besoin', $personne_besoin);
        
        if ($query_run->execute()) {
            $msg_success = "Vos données ont été bien enregistrées!";
            $last_id++;
           
        } else {
            $msg = "Erreur d'enregistrement";
        }
        
    }
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
    <title>enregistrement</title>
</head>
<body>
<?php  include('header.php');?>
    <main>
      
        <section id="inscription" class="enregist">
        <div class="row">
    <div class="text-center">
    <h5 class=" display-6 pt-2 text-sm-left "> Veuillez entrez les informations de l'étudiant:</h5>
  
    </div>
  
         <form class="form2" action="enregistrement.php" method="POST">
               
            <label for="nom">Nom:<span class="text-danger">*</span></label>
            <input type="text" id="nom" name="nom" required ><br><br>
            <label for="prenom">Prénom(s):<span class="text-danger">*</span></label>
            <input type="text" id="prenom" name="prenom" required><br><br>           
            <label for="date_naissance">Date de naissance :<span class="text-danger">*</span></label>
            <input type="date" name="date_naissance" id="date_naissance" required><br><br>
            <label for="genre">Genre :<span class="text-danger">*</span></label>
            <select  type="text" class="choix" id="genre" name="genre">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select><br><br>          
            <label for="date_inscription">Date d'inscription : <span class="text-danger">*</span></label>
            <input type="date" id="date_inscription" name="date_inscription" required><br><br> 
            <label for="personne_besoin">Nom de la Personne en cas de besoin: </label>
            <input type="text" id="personne_besoin" name="personne_besoin" > <br><br>   
            <a href="#"  onclick="alert(' Données enregistrées avec succès')">  <input id="enregistre" name="enregistre" type="submit" value="Enregistrer"></a>
            </form>
           
        </section>
    
    </main>
    <?php  include('footer.php');?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>
</html>