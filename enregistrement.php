
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf_8" />
    <title> enregistrement</title>
    <link rel="stylesheet" href="enregistrement.css">
    </head>
<body>
    

<div class="retour">

    <a href="index.php">retour à l\'acceuil</a>
    
    <div class="menuenregistrement">
    
    <div class="inscription">
    inscription
    </div>
    <div class="identifiant">
    <form method="post" action="traitement.php">
        <p>
        <label for="pseudo">IDENTIFIANT nom ou pseudo</label></br>
        <input type="text" name="pseudo" size="40" maxlength="30" />
        </p>
</form>
    </div>

    <div class="mdp">
        <form method="post" action="traitement.php">
            <p>
            <label for="mdp">mot de passe</label></br>
            <input type="password" name="mdp" size="40" maxlength="30" />
            </p>
    </form>
    
    </div>
    <div class="connection">
    SE CONNECTER
    </div>
    <div class="recuperation">
        mot de passe oublié : tapez votre email.<input type="mail" name="recupmail" />
        </div>
</div>
<div class="nouvelinscrit">
    Membre en devenir inscrivez-vous ici
    </div>
    <div class="resiliation">
        Résilier mon abonnement
    </div>

<div class="pubg">
        publicité gauche
    </div>
    <div class="pubd">
        publicité droite
    </div>

</body>
</html>