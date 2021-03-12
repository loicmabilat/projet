<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root', 'root');
if(isset($_POST['recup_valider'],$_POST['recup_mail']))
{
  if(!empty($_POST['recup_mail']))
        {
        $recup_mail = htmlspecialchars($_POST['recup_mail']);
        if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL))
                {
                $mailexist =$bdd->prepare('SELECT id FROM users WHERE email =?');
                $mailexist->execute(array($recup_mail));
                $mailexist = $mailexist->rowCount();
                if($mailexist == 1)
                        {
                        $error ="votre mail exist chez nous !";
                        $_SESSION['recup_mail'] = $recup_mail;
                        $recup_code = "";
                        for ($i = 0 ; $i <8 ; $i++)
                           {
                           $recup_code .= mt_rand(0,9);
                           }
                        $_SESSION['recup_code'] = $recup_code;
                        $recup_insert = $bdd->prepare('INSERT INTO recuperation(mail, code) VALUES(?, ?)');
                        $recup_insert->execute(array($recup_mail, $recup_code));
                        } 
                }else {
                $error = "votre adresse mail n'existe pas" ;
                }
        } else 
        {
                $error = " Veuillez une adresse mail valide";
        }
  } else
   {
          $error = "Veuillez entrer votre adresse mail" ;
  }

$header="MIME-version: 1.0\r\n";
$header.='From:"moimoi"<loicbmt@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$message =' $recup_code ." est votre code de récupération, notez le.";

mail("loicbmt@gmail.com","recuperation",$message, $header);
';

?>
<html>
    <head>
    <meta charset = "utf-8" >
<link rel="stylesheet" href="recup.css" />
<title>recuperation</title>
    </head>
<body>
  <div class="container">
        <h2>1 er étape pour recupere votre mot de passe</h2>
        <form method="POST" action="">
        <label>votre adresse mail</label>
        <input type="mail" placeholder="Votre adresse mail" name="recup_mail" /><br />
        <input type="submit" value="valider" name="recup_valider" />

        <?php
        if(isset($error)) {echo $error ; echo "<br>";echo "<br>" ;
                        echo @$recup_code ." est votre code de récupération, notez le.";}
         ?> 
         </br></br>
<a href="reinitialisation.php"> cliquez ici pour editer votre mot de passe !</a>
        </form>
  </div>
 </body>
</html>
