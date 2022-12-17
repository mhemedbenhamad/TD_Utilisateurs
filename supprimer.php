<?php
    //se connecter à la base
include 'connecter.php';
if(isset($_GET['sup'])){
 $CIN=$_GET['sup'];
      // supprimer ligne
      $sql = "DELETE FROM TEtudiants where CIN like '$CIN'";
 $Resultat=mysqli_query($conn, $sql);
 if($Resultat){
   header('location:index.php');
   exit;
 }
 else{
    die($msg = "Erreur : ".mysqli_connect_error());
 }

}
    //se déconnecter de la base
    include 'deconnecter.php';

?>