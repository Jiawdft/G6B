<?php
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//////////////////////////////////////////// HOMETOP ////////////////////////////////////////////
if (!defined('SPORT')){define("SPORT", "SPORTS");}
if (!defined('PROFIL')){define("PROFIL", "PROFILE");}
if (!defined('AIDE')){define("AIDE", "HELP");}

//////////////////////////////////////////// FOOTER ////////////////////////////////////////////

if (!defined('Partenaires')){define("Partenaires", "Premium Partners");}

//////////////////////////////////////////// ACCUEIL ////////////////////////////////////////////

if($url=='http://localhost/Github/G6B/Site/controleur/Accueil.php'){
if (!defined('Ins')){define("Ins", "Register");}
if (!defined('CP')){define("Sport", "Sports");}
if (!defined('CP')){define("CP", "Postal code");}
if (!defined('Rechercher')){define("Rechercher", "Search");}
if (!defined('Boxe')){define("Boxe", "BOXING");}
if (!defined('Athlé')){define("Athlé", "ATHLETICS");}
if (!defined('Nata')){define("Nata", "SWIMMING");}
if (!defined('PLAN')){define("PLAN","MAP");}
if (!defined('DGROUPES')){define("DGROUPES", "LAST GROUPS");}
}

//////////////////////////////////////////// FORUM ////////////////////////////////////////////

if($url=='http://localhost/Github/G6B/Site/controleur/Forum.php'){	
if (!defined('Groupes')){define("Groupes", "Groups");}
}

//////////////////////////////////////////// POST ////////////////////////////////////////////
if($url=='http://localhost/Github/G6B/Site/controleur/Post.php'){
if (!defined('Select')){define("Select a ".$_GET['sujet']." to see relative posts");}
if (!defined('Répondre')){define("Répondre", "Answer");}
if (!defined('Réponse')){define("Réponse", "Your Answer :");}
if (!defined('Poster')){define("Poster", "Post");}
}
//////////////////////////////////////////// CONTACT ////////////////////////////////////////////
if($url=='http://localhost/Github/G6B/Site/controleur/Contact.php'){
if (!defined('apdn')){define("apdn", "About us :");}
if (!defined('Description')){define("Description", "Sporciety is a french company founded in 2016. That website aim to bring users together to allow them to share their passion for the sport. They can create participants' groups which workout together, have meetings, sportive contests and so much more.");}
if (!defined('Adresse')){define("Adresse", "Sportciety is located in France :<br><br>10 rue de Vanves<br>92130 ISSY LES MOULINEAUX");}
if (!defined('Info')){define("Info", "A question ? Please contact us by mail :");}
if (!defined('Contacter')){define("Contacter", "Contact us");}
}
//////////////////////////////////////////// CONNEXION ////////////////////////////////////////////
if($url=='http://localhost/Github/G6B/Site/controleur/Connexion.php'){
if (!defined('Connexion')){define("Connexion", "LOG IN");}
if (!defined('Mail')){define("Mail", "Mail Adress");}
if (!defined('Pass')){define("Pass", "Password");}
if (!defined('Pins')){define("Pins", "Not register yet ? Register now !");}
}
//////////////////////////////////////////// INSCRIPTION ////////////////////////////////////////////
if($url=='http://localhost/Github/G6B/Site/controleur/Inscription.php'){
if (!defined('Inscris')){define("Inscris", "REGISTER");}
if (!defined('Hom')){define("Hom", "Man");}
if (!defined('Fem')){define("Fem", "Woman");}
if (!defined('Prénom')){define("Prénom", "First Name");}
if (!defined('Nom')){define("Nom", "Last Name");}
if (!defined('Ddn')){define("Ddn", "Birth Date");}
if (!defined('Tel')){define("Tel", "Phone Number");}
if (!defined('Adres')){define("Adres", "Address");}
if (!defined('Ville')){define("Ville", "City");}
}

?>