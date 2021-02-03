<?php

    $bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');
 
 if(isset($_POST['soumettre']))
 {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $mdp = sha1($_POST['mdp']); //md5 trop de dictionnaire facile donc hachage par sha1
        $confirmdp = sha1($_POST['confirmdp']);
        $nomlength = strlen($nom);
        $prenomlength = strlen($prenom);
        if($mdp == $confirmdp)
                {
                if($prenomlength <= 50)
                {
                if(is_numeric($tel))
                {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL))
                        {$requetemail = $bdd -> prepare("SELECT * FROM users");
                                $requetemail->execute(array($email));
                                $emailexist = $requetemail->rowCount();
                                if($emailexist == 0)
                                {
                                        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) 
                                        AND !empty($_POST['tel']) AND !empty($_POST['mdp']) AND !empty($_POST['confirmdp']))
                                        {
                                        $insertmbr = $bdd->prepare("INSERT INTO users(nom, prenom, email, telephone, mdp, confirmdp) VALUES(?, ?, ?, ?, ?, ?)");
                                        $insertmbr->execute(array($nom, $prenom, $email, $tel, $mdp, $confirmdp));
                                        //$_SESSION['comptecree'] = "votre compte a bien été crée !";
                                        //header('Location: traitement.php');
                                                if($nomlength<=50)
                                                {
                                                        $creer = "votre compte a été créer !";
                                                }else
                                                {
                                                echo 'ne mettez pas plus de 50 caractères a votre nom !';
                                                }
                                        }
                                        else
                                {
                                $erreur = "tous les champs doivent être remplies";
                                }
                                }
                                else
                                {
                                        $erreur =  "votre mail exist déjà !";
                                }
                        } else
                        {
                                $erreur = "votre email n'est pas valid";
                        }                   
                }
                else
                {
                        $erreur = "mettre que des chiffres pour le téléphone!";
                }
                }
                else
                {
                        $erreur = "votre prénom ne doit pas faire plus de 50 caratères";
                }
                } else
                {
                        $erreur = 'Vos mots de passe ne correspondent pas !' ;
                };

 };
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf_8" />
    <title> traitement</title>
    <link rel="stylesheet" href="traitement.css">
    </head>

<body>
<div class="accueil">
        
        <a href="index.php">retour à l'accueil</a>
        
        </div>

        <div class="menu">
        
        <form method="post" action="">
                        <p>
                        <label for="nom">Votre Nom</label></br>
                        <input type="text" name="nom" class="nom" size="40" maxlength="300" value="<?php if(isset($nom)) {echo $nom;} ?>" />
                        </p>

                        <p>
                        <label for="prenom">Votre prénom</label></br>
                        <input type="text" name="prenom" class="nom" size="40" maxlength="330" value="<?php if(isset($prenom)) {echo $prenom;} ?>" />
                        </p>
                
                        <p>
                        <label for="email">Votre couriel Email</label></br>
                        <input type="email" name="email" class="couriel"  size="40" maxlength="30" value="<?php if(isset($email)) {echo $email;} ?>" />
                        </p>

                        <p>
                        <label for="tel">Votre téléphone</label></br>
                        <input type="tel" name="tel" class="tel"  size="12" maxlength="10" />
                        </p>
                
                        <p>
                        <label for="mdp">créer votre mot de passe</label></br>
                        <input type="text" name="mdp" class="motdepasse"  size="40" maxlength="30" />
                        </p>
                
                        <p>
                        <label for="confirmdp">confirmer votre mot de passe</label></br>
                        <input type="text" name="confirmdp" class="confirmdp"  size="40" maxlength="30" />
                        </p>
                        <div class="soumettre">
                        <input type="submit" value="SOUMETTRE" name="soumettre" />
                        </div></br>
                </form>
                
                <?php if(isset($erreur))
                {
                        echo '<font color="red">' .$erreur. "</font>";
                }
                if(isset($creer))
                {
                        echo '<font color="green">' .$creer. "</font>";
                }
                ?>
                </br></br>

        <form method="post" action="" >
                <div class="accord">
                Je suis d'accord pour enregistrer
                mon courriel email,</br> nom et mot de passe sur ce site
                </br>et je suis majeur.<input type="checkbox" name="accord" />
                </div></br>
        </form>
        

<div class="pubg">publicité gauche</div>
<div class="pubd">publicité droite</div>




</body>
</html>