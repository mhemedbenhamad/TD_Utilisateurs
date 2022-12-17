<?php
    //se connecter à la base
include'connecter.php';
if(isset($_GET['submit'])){
    // Recuperer les valeurs des inputs
$CIN        = $_GET["CIN"];    
$Nom        = $_GET["Nom"];
$DateN      = $_GET["DateNaissance"];
$Email      = $_GET["Email"];
$Droits     = $_GET["Droits"];
$MotDePasse = $_GET["MotDePasse"];

$sql = "INSERT INTO TEtudiants (CIN,Nom,DateNaissance,Email,Droits,MotDePasse)
VALUES ('$CIN','$Nom','$DateN','$Email','$Droits','$MotDePasse')";
$Resultat=mysqli_query($conn, $sql);
if ($Resultat) {
    header('location:index.php');
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}
//se déconnecter de la base
include 'deconnecter.php';
?>

<!doctype html>
<html>
    <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <h3>Administration des utilsateurs / Ajout d'un nouvel utilisateur</h3>
        <form method="GET">
        
            <label for="CIN">CIN</label>
            <input name="CIN" type="text" value=""><br><br>
             
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
            
            <input name="submit" type="submit" value="Soumettre">
        </form>
        
    </body>
</html>