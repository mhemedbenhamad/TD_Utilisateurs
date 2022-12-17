
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h3>Adminstration des utilisateurs :</h3> 
         <a href="Ajouter.php"><img src="img/plus.png"></a>
        <?php
           
          // 1.. Se Connecter a la base de donnees
          include 'connecter.php';

          //2.. Selectionner tous les utilisateurs
          $sql = "SELECT * FROM tetudiants;";
          if( !$Resultat = mysqli_query($conn, $sql) ){
              $msg = "Erreur : ".mysqli_error($conn);
              header("location:erreur.php?msg=$msg");
          }
        ?>     
        <table>
           <tr><th>CIN</th><th>Nom et prénom</th><th>Date De Naissance</th><th>Email</th><th>Droits</th><th>Mot de Passe</th><th></th><th></th>
              <?php
                    while($Ligne = mysqli_fetch_assoc($Resultat)){
                        $CIN       =$Ligne['CIN'];
                        $NOM       =$Ligne['Nom'];
                        $DATEN     =$Ligne['DateNaissance']; 
                        $EMAIL     =$Ligne['Email'];
                        $DROITS    =$Ligne['Droits'];
                        $MOTPASSE  =$Ligne['MotDePasse'];

                     echo'
                        <tr>
                            <td>'.$CIN.'</td>
                            <td>'.$NOM.'</td>
                            <td>'.$DATEN.'</td>
                            <td>'.$EMAIL.'</td>
                            <td>'.$DROITS.'</td>
                            <td>'.$MOTPASSE.'</td>
                            <td><a href="modifier.php?mod='.$CIN.'"><img src="img/modif.png"></a></td> 
                            <td><a href="Supprimer.php?sup='.$CIN.'"><img src="img/corbeille.png"</a></td>
                        </tr>';
                            
                        

                    }
                    
                    // 2.. Se Deconnecter de la base
                    include'deconnecter.php';
                ?>
        </table>
          




        </div>
        

    </body>
</html>