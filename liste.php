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
    $base_donnee=new PDO ('mysql:host=localhost;dbname=gesta;','root','');
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
              <a href=""><button type="button" name class="btn btn-outline-warning">Consulter la liste</button></a>
              </div>
              <div>
              <a href="/projets/gesta/index.php"><button type="button" name class="btn btn-outline-warning">Déconnexion</button></a>
              </div>
            </div>
          </nav>
    </header>
    <main>
      <div class="row container-fluid d-flex">
          <form class="form_1" action="">
       <?php
       echo"<h1 class=titre_form_1>Liste des étudiants</h1>";
       $recup_etudiant=$base_donnee->query('SELECT * FROM `etudiant`');
       while($etudiant=$recup_etudiant->fecth()){
        
       }
       ?>
      
         </form>
        </div>
      </div>
        
    </main>
     <footer >
      <div class="row ">
        <div class="footer_liste container-fluid">
        <p class=" pt-2 text-center text-white">© 2023 - Gesta - Université-Joseph-Ki-Zerbo - UFR/SDS </p>
      </div>       
     </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>

</html>