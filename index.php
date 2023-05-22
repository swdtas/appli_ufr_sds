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
    <title>burkina_tech</title>
</head>

<body>
<?php
    session_start();
      if(isset($_POST['connect'])){
          if(!empty($_POST['username']) AND !empty($_POST['password'])){
              $username_defaut='admin1234@gmail.com';
              $mot_de_passe_defaut='1234';
              $username_saisi=htmlspecialchars($_POST['username']);
              $mot_de_passe_saisi=htmlspecialchars($_POST['password']);
              if($mot_de_passe_defaut==$mot_de_passe_saisi AND $username_defaut==$username_saisi){
                $_SESSION['password']=$mot_de_passe_saisi;
                  header('Location:enregistrement.php');
              }else{
                echo'<h6 class=" incorrect text-danger"> votre mot de passe est incorrect!</h6>';
                  
              }
      
          }
      }
      
  ?> 
    <header>
    <canvas id="canvas" style="position : absolute; top : 0px; left : 0px;"></canvas>
<script type="text/javascript" src="http://sheepeuh.com/rain/dat.gui.js"></script>
<div style="position : absolute; bottom : 0px; left : 0px; margin : 20px; padding : 5px; background-color:#ce3635;">
  <a href="http://sheepeuh.com" style="color: white; text-decoration : none; font-family: 'Lato', sans-serif; text-shadow: 1px 1px 1px black;">Me</a>
</div>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid ">
              <div >
              <a class="navbar-brand" href="#">
                <img src="images/logo.jpeg" alt="" width="100"style=" border-radius: 10px;" height="80" class="d-inline-block align-text-top">
                <h4 class="d-inline-block align-text-top text-white pt-3 ">Université-Joseph-Ki-Zerbo <br class="align-text-center">UFR: Sciences de la santé</h4> 
              </a>
            </div>
              <div >
               <a href=""><button type="button" name="connect"  class="btn btn-outline-warning">connexion</button></a>
              </div>   
            </div>
          </nav>
    </header>
    <main>
     <div class="row">
      <div class="container-fluid ml-5">
        <div class="polaroid">      
          <h1 class="text-center">Identification</h1>
          <form action="" method="POST">
            <label for="username">Nom d'utilisateur ou email:</label>
            <input type="username" id="username" name="username" required><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <!-- <p class=" title1 text-danger">mot de passe oublié?  </p>  -->
            <input id="connect" type="submit" name="connect" value="Se connecter">
          </form>
        </div>
      </div>
     </div>                
    </main>
     <footer >
      <div class="row ">
        <div class="container-fluid">
        <p class=" pt-2 text-center text-white">© 2023 - Gesta - Université-Joseph-Ki-Zerbo - UFR/SDS </p>
      </div>       
     </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="/javascript.js"></script>
</body>

</html>