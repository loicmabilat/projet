<?php
session_start();
if (!isset($_SESSION['loic']) || !$_SESSION['loic']) {
header('Location: connexion.html');
}

$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');
if(isset($_SESSION['loic']))
{
        $getid = intval($_SESSION['id']);
        $requser = $bdd->prepare('SELECT * FROM users WHERE id =? ');
        $requser->execute(array($getid));
        $userinfo = $requser->fetch();

?>

<!DOCTYPE html>
<html>

    <head>
    <meta charset = "utf_8" />
    <title> legume livraison</title>
    <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" media="screen and (max-width:1000px)"
        href="mobileindex.css"/>
    </head>

    <body>
    <header>
        <div class="menu">
        <div class="accueil">
        <a>Accueil</a>
        </div>
        

        <div class="panier">
        <form action="panier.php" method="POST">
        <a href="panier.php">panier</a>
        </br>
        </div>

        <div class="abonnement">
        <form action="abonnement.php" method="POST">
        <a href="abonnement.php">abonnement</a>
        </br>
        </div>
    </div>
    
    
        </div>
    </header>
    </br></br>

    <div class="ecrit">
    <div class="presentation">
    Légume ou Fruit</br> 
    sur site
    ou en livraison </br>
    du producteur au consommateur
    </div>
    <div class="barreseparation"></div>
    <div class="principe">
    <a>Une production locale et BIO.</br>
    A l’heure actuelle, nous cultivons sur une ancienne friche 
    en bordure de rivière que nous avons réhabilité, d'une surface 
    de l’ordre de 1 ha dont 0,2 ha environ de tunnels froids. Les légumes 
    de saison sont cultivés selon les règles de l’Agriculture Biologique, 
    avec un développement de la permaculture, et d'autres 
    techniques innovantes. </a>
    </div>
    </div>

    <div class="langue">
    langue principale: FRancais <br>
    Profil de : <?php echo $_SESSION['nom']?></br>
        Prénom : <?php echo $_SESSION['prenom']?> </br>
        Email : <?php echo $_SESSION['email']?></br>
        <a href="edition.php">editer mon profil .</a></br>
        <a href="deconnexion.php">se deconnecter .</a>
    
    </div>
    <div class="pagett">
    <div class="paniersaison">
    <div class="titrepanier">
    Nos paniers de la saison</div>
    <div class="panier1">panier 1
    <img src="image\ppanier1.jpg"></img></div>
    <div class="panier2">panier 2
    <img src="image\ppanier2.jpg"></img></div>
    <div class="panier3">panier 3
    <img src="image\ppanier3.jpg"></img></div>
    </div>

    
    <footer>
    a propos : du site info cookies Mon compte Nous contacter
    @2021 tous droits réservés    
    </footer>

    </body>

</html>
<?php
}
?>