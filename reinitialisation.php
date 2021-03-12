<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');

if(!empty($_POST['confirmcode']))
{
    $recup_code = htmlspecialchars($_POST['confirmcode']);
    $confirmcode = $bdd->prepare('SELECT * FROM recuperation WHERE code=? AND mail=?');
    $confirmcode->execute(array($recup_code,$_SESSION['recup_mail']));
    $confirmcode= $confirmcode->rowCount();
    if($confirmcode == 1)
        {

        $mdp = sha1($_POST['newmdp']);
        $confirmdp = sha1($_POST['newconfirmdp']);
        if($mdp == $confirmdp)
            {
            $insertmdp = $bdd->prepare("UPDATE users SET mdp = ? WHERE email = ?");
            $insertmdp->execute(array($mdp, $_SESSION['recup_mail']));
            $del_req =$bdd->prepare('DELETE FROM recuperation WHERE mail=?');
            $del_req->execute(array($_SESSION['recup_mail']));
            echo "votre mot de passe est mit à jour";
            header( 'Location:index.html' );
            }else
            {
            $error= "Vos mots de passe ne sont pas identiques !";
            }
        }else
        {
        $error ="ce n'est pas le bon code";
        }
    
} else
{
    $error = " Veuiilez entrer un code !";
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8" >
    <link rel="stylesheet" href="recup.css">
    <link rel="stylesheet" media="screen and (max-width:1000px)"
        href="mobilerecup.css"/>
        <title>Editonmotdepasse</title>
    </head>

<body>
    <div class="container">
        <h2>edition de votre mot de passe</h2>
        <form method="POST" action="">
        <label>votre code est :</label>
        <input type="number" name="confirmcode" focus /><br /><br />
        <label>nouveau mot de passe :</label>
        <input type="password" name="newmdp" placeholder="mdp" /><br /><br />
        <label>confirmé le nouveau mot de passse:</label>
        <input type="password" name="newconfirmdp" placeholder="confirmdp" /><br /><br />
        <input type="submit" value="entrer" name="entrer"/>
        </form>
        <br /><br />
        <?php if(isset($msg)) {echo $msg; } ?>
        <div class="retour">
        <a href="index.html">retour à l'accueil</a>
        </div>
</div>
</body>
</html>

