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
 <?php
    session_start();
      if(!$_SESSION['password']){
        header('Location:index.php');
      }
  ?> 
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
               <a href="/projets/gesta/enregistrement.php"><button type="button" name class="btn btn-outline-warning">Inscription</button></a>
              </div>
              <div>
              <a href="/projets/gesta/liste.php"><button type="button" name class="btn btn-outline-warning">Consulter la liste</button></a>
              </div>
              <div>
              <a href="/projets/gesta/index.php"><button type="button" name class="btn btn-outline-warning">Déconnexion</button></a>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <section id="inscription" class="enregist">
            <form class="form2" action="liste.php" method="POST">
               <h2>Informations personnelles de l'étudiant:</h2> 
            <label for="ine">INE :</label>
            <input type="text" id="ine" name="ine"><br><br>
            
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required ><br><br>
            
            <!-- <label for="prenoms">Prénom(s):</label>
            <input type="text" id="prenoms" name="prenoms" required><br><br>
            
            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance" required><br><br>
             <label for="date_naissance">Lieu de naissance :</label>
            <input type="lieu" id="lieu_naissance" name="lieu_naissance" required ><br><br>
            <label for="genre">Genre :</label>
            <select  type="lieu" id="genre" name="genre">
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select><br><br> 
            <label for="genre">Niveau d'etudes:</label>     
            <select  type="lieu" id="niveau_etude" name="niveau_etude">
                <option value="licence1">Licence1</option>
                <option value="licence1">Licence2</option>
                <option value="licence1">Licence3</option>
                <option value="licence1">Master1</option>
                <option value="licence1">Master2</option>
                <option value="licence1">Doctorant</option>
            </select><br><br> 
            <label for="ref_cnib">Réferences CNIB:</label>
            <input type="text" id="ref_cnib" name="ref_cnib" required><br><br>         
            <label for="date_inscription">Date d'inscription :</label>
            <input type="date" id="date_inscription" name="date_inscription" required><br><br> 
            <label for="telephone">Numéro de télephone 1:</label>
            <input type="tel" id="telephone" name="telephone" required><br><br>   
            <label for="telephone">Numéro de télephone 2:</label>
            <input type="tel" id="telephone" name="telephone"><br><br>    
            <h2>Informations de la personne en cas de besion:</h2>          
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="personne_contact">Prénom(s):</label>
            <input type="text" id="prenom" name="prenom"required><br><br>
            <label for="ref_cnib">Réferences CNIB:</label>
            <input type="text" id="ref_cnib" name="ref_cnib"><br><br>       
            <label for="telephone">Numéro de télephone 1:</label>
            <input type="tel" id="telephone" name="telephone" required><br><br>   
            <label for="telephone">Numéro de télephone 2:</label>
            <input type="tel" id="telephone" name="telephone"><br><br>      -->
            <input type="submit" value="Enregistrer">
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