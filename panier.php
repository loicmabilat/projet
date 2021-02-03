<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf_8" />
    <title>panier</title>
    <link rel="stylesheet" href="panier.css">
    </head>
<body>

<div class="retour">
    <a href="index.php">retour à l'accueil</a>
</div>

<div class="colonne">
    <div class="colonne1">
        <div class="panier1">
        <img src="image\pppanier1.jpg"></br>
            panier 1
        </div>
        <div class="panier2">
        <img src="image\pppanier2.jpg"></br>
            panier 2
        </div><div class="panier3">
        <img src="image\pppanier3.jpg"></br>
            panier 3
        </div>
    </div>
    <div class="colonne2">
        <div class="choix">
            choix des paniers </br>petit ou grand
        </div>
        <div class="nombrepanier1">
            <form method="post" action="formulaire.php">
                <p>
                <label for="panier1"></label></br>
                Grand<input type="checkbox" name="grandpanier1" id="panier1"/>
                Petit<input type="checkbox" name="petitpanier1" id="panier1"/>
                </p>
            </form>
        </div>
        <div class="nombrepanier2">
            <form method="post" action="formulaire.php">
                <p>
                <label for="panier2"></label></br>
                Grand<input type="checkbox" name="grandpanier2" id="panier2"  />
                Petit<input type="checkbox" name="petitpanier2" id="panier2"  />
                </p>
            </form>
        </div>
        <div class="nombrepanier3">
            <form method="post" action="formulaire.php">
                <p>
                    <label for="panier3"></label></br>
                    Grand<input type="checkbox" name="grandpanier3" id="panier3"  />
                    Petit<input type="checkbox" name="petitpanier3" id="panier3"  />
                </p>
            </form>
        </div>
        <div class="totalpanier">
            <a>nombre de panier total 1 à 6 maximum</a>
        </div>
    </div>
    <div class="colonne3">
        <div class="imagepanier1">
        poireau - radis - courgette - betterave - tomate - oignon - ail
            <div class="imgpanier1"> 
            <img src="image\ppoireau.jpg">
            <img src="image\rradis.jpg">
            <img src="image\ccourgette.jpg">
            <img src="image\bbetterave.jpg">
            <img src="image\ttomate.jpg">
            <img src="image\ooignon.jpg">
            <img src="image\aail.jpg">
            </div>
            </div>
                <div class="imagepanier2">
                pomme de terre blanche et rouge - carotte - oignon - ail 
                <div class="imgpanier2">
                <img src="image\ppommedtblanche.jpg">
                <img src="image\ppommedtrouge.jpg">
                <img src="image\ccarotte.jpg">
                <img src="image\ooignon.jpg">
                <img src="image\aail.jpg">
                </div>
            </div>
            <div class="imagepanier3">
            pomme blanche - pomme rouge - poire- brugnon ou pêche
                <div class="imgpanier3">
                <img src="image\ppommeblanche.jpg">
                <img src="image\ppommerouge.jpg">
                <img src="image\ppoire.png">
                <img src="image\bbrugnon.jpg">
                <img scr="image\ppeche.png">
                </div>
            </div>
        
        </div>

    </div>

    <div class="choixabonnement">
    
        <a href="abonnement.html">choix de
        l'abonnement après inscription
        </a>
    </div>
    <div class="pub">publicité</div>
</body>
</html>