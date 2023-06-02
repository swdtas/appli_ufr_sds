<?php
    session_start();
   include('user.php');
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
    <title>accueil</title>
</head>
<body>
<div id="loading">
  <div class="spinner"></div>
</div>

<header>
</div>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid ">
              <div >
              <a class="navbar-brand" href="#">
                <img class="img-fluid" src="images/logo.jpeg" alt="" width="100"style=" border-radius: 10px;" height="80" class="d-inline-block align-text-top">
                <h4 class="d-inline-block align-text-top text-white  ">Université-Joseph-Ki-Zerbo <br class="align-text-center">UFR: Sciences de la santé</h4> 
              </a>
            </div>
              <div >
               <a href="#"><button type="button" name="connect"  class="btn btn-outline-warning">connexion</button></a>
              </div>   
            </div>
          </nav>
    </header>
    <main>
     <div class="row" id="fleche">
      <div class="container-fluid ml-5">
        <div class="polaroid">      
          <h1 class="text-center">Identification</h1>
          <form action="" method="POST">
            <label for="username">Nom d'utilisateur ou email:</label>
            <input type="username" id="username" name="username" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <!-- <p class=" title1 text-danger">mot de passe oublié?  </p>  -->
            <input id="connect" type="submit" name="connecter" value="Se connecter">
          </form>
        </div>
      </div>
     </div>                
    </main>
     <?php  include('footer.php');?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript.js"></script>
</body>

</html>