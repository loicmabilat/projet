<?php
session_start();
if( !isset($_SESSION['loic']) || !$_SESSION['loic']){
header('Location: connexion.php');}
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');

if(isset($_SESSION['loic']))
{
    $getid = intval($_SESSION['id']);
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $email = $_SESSION['email'];
    $telephone = $_SESSION['telephone'];

    $requser = $bdd->prepare('SELECT * FROM users WHERE id =? ,nom =? ,prenom=? , email=? , telephone=?');
    $requser->execute(array($getid, $nom , $prenom ,$email ,$telephone));
    $userinfo = $requser->fetch();
    

    $reqpanier = $bdd->prepare('SELECT * FROM panier WHERE id_users =? ');
    $reqpanier->execute(array($getid));
    $panierinfo = $reqpanier->fetch();
    $_SESSION['panier'] = $panierinfo['composition'];

    $reqabonnement = $bdd->prepare('SELECT * FROM dates WHERE id_users =?');
    $reqabonnement->execute(array($getid));
    $dateinfo = $reqabonnement->fetch();
    $datedebut = $dateinfo['datedebut'];
    $datefin = $dateinfo['datefin'];
    
    $reqadresse = $bdd->prepare('SELECT * FROM adresse WHERE id_users=? ');
    $reqadresse->execute(array($getid));
    $adresseinfo = $reqadresse->fetch();
    $adresse = $adresseinfo['adresse'];

}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf_8" />
    <title>resume</title>
    <link rel="stylesheet" href="resume.css" />
    <link rel="stylesheet" media="screen and (max-width:1000px)" href="mobileresume.css" />
    </head>

<body>
<div class="resume">
    <a href="index.php">retour à l'accueil</a><br />
     <?php echo "Numero de client : " .$getid . "<br />\n";
     echo "Profil de : " . $_SESSION['nom'] . "<br />\n";
     echo "prénom : " . $_SESSION['prenom']  . "<br />\n";
     echo "Courriel : " . $_SESSION['email']  ."<br />\n";
     echo "votre téléphone est le : " . $_SESSION['telephone'] . "<br />\n";
     echo "choix du panier : " . $_SESSION['panier'] ."<br />\n";
     echo "abonnement annuel souscrit : " . $datedebut  . "<br />\n";
     echo "abonnement se finit le : " . $datefin  . "<br />\n";
     echo " livré à l'adresse suivant : " . $adresse  . "<br />\n";
    
    ?>
</div>

</body>
</html>