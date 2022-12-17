<?php

    //se connecter à la base
include 'connecter.php';
$CIN        = $_GET["mod"];
if(isset($_POST['submit'])){
    // Recuperer les valeurs des inputs

$Nom        = $_POST["Nom"];
$DateN      = $_POST["DateNaissance"];
$Email      = $_POST["Email"];
$Droits     = $_POST["Droits"];
$MotDePasse = $_POST["MotDePasse"];

$sql = "UPDATE TEtudiants SET Nom='$Nom',DateNaissance='$DateN',Email='$Email',Droits='$Droits',MotDePasse='$MotDePasse' where CIN like '$CIN'";
$Resultat=mysqli_query($conn, $sql);
if ($Resultat) {
    header('location:index.php');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    //se déconnecter de la base
include 'deconnecter.php';

}


?>

<!doctype html>
<html>
    <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h3>Administration des utilsateurs / Modifier un utilisateur</h3>
        <form method="POST">
            
            <label for="Nom">Nom et prénom</label>
            <input name="Nom" type="text" value=""><br><br>
        
            <label for="DateNaissance">Date de naissance</label>
            <input name="DateNaissance" type="text" value=""><br><br>

            <label for="Email">E-mail</label>
            <input name="Email" type="text" value=""><br><br>
 
            <label for="MotDePasse">Mot de passe</label>
            <input name="MotDePasse" type="password" value=""><br><br>

            <label for="Droits">Droits</label>
            <input name="Droits" type="radio" value="admin">Administrateur
            <input name="Droits" type="radio" value="utili" checked>Utilisateur<br><br>
            
            <input name="submit" type="submit" value="Modifier">
        </form>
        
    </body>
</html>