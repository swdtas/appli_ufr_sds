<?php
    session_start();
      if(!$_SESSION['password']){
        header('Location:index.php');
      }
      include('connexion_base.php');



      $modifier= "UPDATE `etudiant` SET `nom`=[value-1],`prenom`=[value-2],`date_naissance`=[value-3],`genre`=[value-4],`date_inscription`=[value-5],`contact`=[value-6]"
?>