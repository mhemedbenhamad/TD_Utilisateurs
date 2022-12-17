<?php
// Connexion à la base des données
            
                
                $BDServeur    = "localhost";
                $BDLogin      = "root";
                $BDMotDePasse = "yassif";
                $BDNom        = "base_correction";

                $conn = mysqli_connect($BDServeur, $BDLogin, $BDMotDePasse, $BDNom);
                if( !$conn ){
                    die($msg = "Erreur : ".mysqli_connect_error());
                    header("location:erreur.php?msg=$msg");
                    
                }
           
          

?>
