<?php
    session_start();
      
      
  ?> 


if {
            
            
        }



        if ($result->rowCount()==0) {
        $onglet_inscription = '<a href="#" class=inscript><button type="button" name="inscr" class="btn btn-outline-warning">Inscription</button></a>';
        echo" $onglet_inscription";
    }else{
    $username= $_POST['username']; 
    $mot_pass_saisi = $_POST['password'];   
    $query = "INSERT INTO user (nom_utilisateur,mot_pass)VALUES (:username, :mot_pass_saisi)";
    $query_run = $connect->prepare($query);
    $query_run->bindParam(':username', $username);
    $query_run->bindParam(':mot_pass_saisi', $mot_pass_saisi);
    if ($query_run->execute()) {
        echo'<h6 class=" incorrect text-danger"> Vos données ont été bien enregistrées!</h6>'; 
       } else {
        $msg = "Erreur d'enregistrement";
      }

    }
   

    <?php  include('user.php');?>