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
    <title>liste des etudiants</title>
</head>
<body>
<?php  include('header.php');?>
<main>
  <div class="row container-fluid">
    <div class="table_etudiant  col-lg-12 col-ms-12 col-xm-12 col-md-12">
      <table>
          <tr class="ligne1">
              <!-- <th>INE</th> -->
              <th>Nom</th>
              <th>Prénom</th>
              <th>Date de naissance</th>
              <th>Genre</th>
              <th>Date d'inscription</th>
              <th>Personne en <br> cas de besoin</th>
              <th>Détails</th>
              <th>Modifier</th>
              <th>Supprimer</th>
              
          </tr>

          <?php
          // Connexion à la base de données
          session_start();
          if(!$_SESSION['password']){
            header('Location:index.php');
          }
          include('connexion_base.php');
          // Récupérer la dernière valeur auto-incrémentée
          $prefix = 'E';   
          $year = date('Y');
          
          // Récupérer les données de la base de données
          $sql = "SELECT id, nom, prenom, date_naissance, genre, date_inscription, personne_besoin FROM etudiant";
          $result = $connect->query($sql);
          

          if ($result->rowCount() > 0) {
            $id_format = $prefix . $year;
              // Afficher les données dans le tableau
              while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                  echo "<tr>";
                  // echo "<td>".$row["ine"]."</td>";
                  echo "<td>".$row["nom"]."</td>";        
                  echo "<td>".$row["prenom"]."</td>";
                  echo "<td>".$row["date_naissance"]."</td>";
                  echo "<td>".$row["genre"]."</td>";
                  echo "<td>".$row["date_inscription"]."</td>";
                  echo "<td>".$row["personne_besoin"]."</td>";                 
                  echo '
                  <td class="text-danger">
                      <a class="soulig"  href="#" data-toggle="modal" data-target="#myModal' . $row["id"] . '">
                          <button type="button" class="btn btn-info">détails</button> 
                      </a>
                  </td>';
                  echo '
                  <td class="text-black">
                      <a class="soulig"href="modifier.php?id=' . $row["id"] . '" >
                         
                      <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-warning">modifier</button>
                      </a>
                  </td>';
                  echo '
                    <td class="text-danger">
                        <a onclick="return confirm(\'Voulez vous vraiment supprimer\');" class="soulig" href="supprimer.php?id=' . $row["id"] . '">
                            <button type="button" class="btn btn-danger">supprimer</button>
                        </a>
                    </td>';

                  echo "</tr>";

                  // Fenêtre modale pour les détails de l'étudiant
                  echo '<div class="modal fade" id="myModal' . $row["id"] . '" role="dialog">';
                  echo '  <div class="modal-dialog">';
                  echo '    <div class="modal-content">';
                  echo '      <div class="modal-header">';
                  echo '        <h4 class="modal-title">Détails de l\'étudiant ' . $row["nom"] . ' </h4>';
                  echo '        <button type="button" class="close" data-dismiss="modal">&times;</button>';
                  echo '      </div>';
                  echo '      <div class="modal-body ">';
                  echo '        <p>Nom : ' . $row["nom"] . '</p>';
                  echo '        <p>Prénom(s) : ' . $row["prenom"] . '</p>';
                  echo '        <p>Date de naissance : ' . $row["date_naissance"] . '</p>';
                  echo '        <p>Genre : ' . $row["genre"] . '</p>';
                  echo '        <p>Date d\'inscription : ' . $row["date_inscription"] . '</p>';
                  echo '        <p>Personne en cas de besoin: ' . $row["personne_besoin"] . '</p>';
                  echo '      </div>';
                  echo '      <div class="modal-footer">';
                  echo '        <button type="button" class="btn btn-default btn-primary " data-dismiss="modal">Fermer</button>';
                  echo '      </div>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
              }
          } else {
              echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
          }

          // Fermer la connexion à la base de données
          $connect = null;
          ?>
      </table>
    </div>
  </div>
</main>

<?php  include('footer.php');?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>
</html>
