<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');

if(isset($_SESSION['id']))
{
        $requser = $bdd->prepare("SELECT * FROM users WHERE id =?");
        $requser->execute(array($_SESSION['id']));
        $user = $requser->fetch();
        if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom'])
        {
                $newnom = htmlspecialchars($_POST['newnom']);
                $insertnom = $bdd->prepare("UPDATE users SET nom = ? WHERE id =?");
                $insertnom->execute(array($newnom, $_SESSION['id']));
                echo "mis à jour";
                
        }
        
        if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom'])
        {
                $newprenom = htmlspecialchars($_POST['newprenom']);
                $insertprenom = $bdd->prepare("UPDATE users SET prenom = ? WHERE id =?");
                $insertprenom->execute(array($newprenom, $_SESSION['id']));
                echo "mis à jour";
        }

        if(isset($_POST['newemail']) AND !empty($_POST['newemail']) AND $_POST['newemail'] != $user['email'])
        {
                $newemail = htmlspecialchars($_POST['newemail']);
                $insertemail = $bdd->prepare("UPDATE users SET email = ? WHERE id =?");
                $insertemail->execute(array($newemail, $_SESSION['id']));
                echo "mis à jour";
        }

        if(isset($_POST['newtelephone']) AND !empty($_POST['newtelephone']) AND $_POST['newtelephone'] != $user['telephone'])
        {
                $newtelephone = htmlspecialchars($_POST['newtelephone']);
                $inserttel = $bdd->prepare("UPDATE users SET telephone = ? WHERE id =?");
                $inserttel->execute(array($newtelephone, $_SESSION['id']));
                echo "mis à jour";
        }

        if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND isset($_POST['newconfirmdp']) AND !empty($_POST['newconfirmdp']))
        {
                $mdp = sha1($_POST['newmdp']);
                $confirmdp = sha1($_POST['newconfirmdp']);
                if($mdp == $confirmdp)
                {
                        $insertmdp = $bdd->prepare("UPDATE users FROM mdp = ? WHERE id = ?");
                        $insertmdp->execute(array($mdp, $_SESSION['id']));
                        echo "mis à jour";
                }
                else{
                        $msg = "vos deux mdp ne correspondent pas";
                }
                
        }

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8" >
    <link rel="stylesheet" href="edition.css">
    <link rel="stylesheet" media="screen and (max-width:1000px)"
        href="mobileedition.css"/>
        <title>Editon</title>
    </head>

<body>
        
        <h2>edition de votre profil</h2>
        <form method="POST" action="">
        <label>nouveau nom :</label>
        <input type="text" name="newnom" placeholder="nom" value="<?php echo $user['nom'] ?>" /> <br /><br />
        <label>nouveau prénom :</label>
        <input type="text" name="newprenom" placeholder="prenom" value="<?php echo $user['prenom'] ?>"/><br /><br />
        <label>nouveau email :</label>
        <input type="text" name="newemail" placeholder="email" value="<?php echo $user['email'] ?>"/><br /><br />
        <label>nouveau téléphone :</label>
        <input type="tel" name="newtelephone" placeholder="telephone" value="<?php echo $user['telephone'] ?>" /><br /><br />
        <label>nouveau mot de passe :</label>
        <input type="password" name="newmdp" placeholder="mdp" /><br /><br />
        <label>confirmé le nouveau mot de passse:</label>
        <input type="password" name="newconfirmdp" placeholder="confirmdp" /><br /><br />
        <input type="submit" value="confirmation de la mise à jour" />
        </form>
        <br /><br />
        <?php if(isset($msg)) {echo $msg; } ?>
        <div class="retour">
        <a href="index.php">retour à l'accueil</a>
        </div>
</body>
</html>
<?php
}
else
{
        header('Lcocation: index.php');
}
?>
