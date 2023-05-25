<?php
    session_start();
      if(!$_SESSION['password']){
        header('Location:index.php');
      }
      include('connexion_base.php');
      if(isset($_POST['enregistre'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $date_naissance=$_POST['date_naissance'];
        $genre=$_POST['genre'];
        $date_inscription=$_POST['date_inscription'];
        $contact=$_POST['contact'];
        $query = "INSERT INTO etudiant (nom, prenom, date_naissance, genre, date_inscription, contact)
        VALUES (:nom, :prenom, :date_naissance, :genre, :date_inscription, :contact)";
        $query_run=$connect->prepare($query);
        $query_run->bindParam(':nom',$nom);
        $query_run->bindParam(':prenom',$prenom);
        $query_run->bindParam(':date_naissance',$date_naissance);
        $query_run->bindParam(':genre',$genre);
        $query_run->bindParam(':date_inscription',$date_inscription); 
        $query_run->bindParam(':contact',$contact);
      try {
        $query_run->execute();
        $msg_success=" Vos données ont été bien enregistrées!";
       
    } catch (PDOException $e) {
      $msg="Erreur d'enregistrement" . $e->getMessage();
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
    <title>gesta</title>
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
      
        <section id="inscription" class="enregist">
          <div class="text-center display-5">
          </div>
         <form class="form2" action="enregistrement.php" method="POST">
               <h2>Informations de l'étudiant:</h2>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required ><br><br>
            <label for="prenom">Prénom(s):</label>
            <input type="text" id="prenom" name="prenom" required><br><br>           
            <label for="date_naissance">Date de naissance :</label>
            <input type="date" name="date_naissance" id="date_naissance" required><br><br>
            <label for="genre">Genre :</label>
            <select  type="text" id="genre" name="genre">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select><br><br>          
            <label for="date_inscription">Date d'inscription :</label>
            <input type="date" id="date_inscription" name="date_inscription" required><br><br> 
            <label for="contact">contact de la personne en cas de besoin:</label>
            <input type="tel" id="contact" name="contact" > <br><br>   
            <input id="enregistre" name="enregistre" type="submit" value="Enregistrer">
            </form>
           
        </section>
    
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