                               
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Traduire vos pages dans une autre langue                                                                      
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=817
    Auteur           : sheppy1                                                                                            
    Date édition     : 11 Jan 2019                                                                                        
    Date mise à jour : 19 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/?>
    <!DOCTYPE html> 
    <html lang="fr">
    <body> 
      
    <p>Bonjour!</p>
    <p>Bienvenue sur phpsources</p>
      
    <p>Translate this page in your preferred language:</p>
      
    <div id="google_translate_element"></div> 
      
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},
 'google_translate_element'); 
    } 
    </script> 
      
    <script type="text/javascript"
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script> 
      
    <p><a href="panier.html">panier</a>vous pouvez traduire le contenu de cette page en sélectionnant une
 langue dans le menu déroulant.</p>
      
    </body> 
    </html>

