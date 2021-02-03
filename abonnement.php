<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf_8" />
    <title>abonnement</title>
    <link rel="stylesheet" href="abonnement.css">
    </head>

        <body>

        <div class="retour">
        <a href="index.php">retour à l'accueil</a>
        </div></br>

<div class="menuabonnement">

        <div class="intro">
        Votre dossier d'abonnements
        </div></br>

        <form method="post" action="traitement.html">
        <p>
                <label for="nom">quel est votre Nom ?</label>
                <input type="text" name="nom" id="nom" size="50" maxlength="48" autofocus/>
        </p>

        <p>
                <label for="prenom">Quel est votre prénom ?</label>
                <input type="text" name="prenom" id="prenom"size="46" maxlength="45"/>
        </p>
        
        <p>
                <label for="addresse">Quel est votre adresse ?</label></br>
                <input type="textarea" name="adresse" id="adresse" size="80"  maxlength="90" /></br>
                <textarea name="adresse" id="adresse" cols="80" rows="2"></textarea>
        </p>
                <p>
                <label for="telephone">Téléphone fixe ou portable ?</label>
                <input type="tel" name="tel" id="tel" size="8" maxlength="10" />
                </p>
        <p>
                <label for="email">Quel est votre email ?</label>
                <input type="email" name="email" id="email" size="50" maxlength="50" />
        </p>
        <p>
                <label for="pseudo">Choisissez un pseudo optionnel ?</label>
                <input type="text" name="pseudo" id="pseudo" maxlength="30" size="32" />
        </p>

</form>
<input type="submit" value="enregistrer" />
</br>

<div class="panierchoisie">
        
        
                <a>Fréquence de livraison des paniers choisis par semaine</a>
</div>
        <div class="abonnementprit">
        <form method="post" action="traitement.php">
                <p>
                        <label for="choixmois">Abonnement choisie soit au mois</label>
                        <select id="choixmois" name="choixmois" >
                        <option value="janvier">janvier</option>
                        <option value="fevrier">fevrier</option>
                        <option value="mars">mars</option>
                        <option value="avril">avril</option>
                        <option value="mai">mai</option>
                        <option value="juin">juin</option>
                        <option value="juillet">juillet</option>
                        <option value="aout">aout</option>
                        <option value="septembre">septembre</option>
                        <option value="octobre">octobre</option>
                        <option value="novembre">novembre</option>
                        <option value="decembre">decembre</option>
                        </select>
                </p>
                <p>
                        <label for="choixsaison">Abonnement choisie soit à l'annee</label>
                        <input type="radio" id="choixannee" name="choixsaison" />
                        <a></a>
                </p>
        
        <p>
                <label for="choixsaison">Abonnement choisie soit en été</label>
                <input type="radio" id="choixete" name="choixsaison" />
                <h5>1er semaine de juin à fin septembre</h5>
        </p>
        <p>
                <label for="choixsaison">Abonnement choisie soit en hiver</label>
                <input type="radio" id="choixhiver" name="choixsaison" />
                <h5>1er semaine de décembre à fin mars</h5>
        </p>
        </form>
        </div>
        <div class="accordcvg">
        <a href="accordcgv.pdf">Accord contrat Général de Vente .CGV</a>
        
        </div></br>

  </div>

</div> <!--fin de div page entiere-->

<div class="pubg">
        publicité gauche
        </div>
        <div class="pubd">
        publicité droite
        </div>

</body>
</html>