<?php

if ($_GET['langue']=='fr') {
	include('../vue/Accueil_fr.php');
	include('../vue/Contact_fr.php');
}
else if ($_GET['langue']=='en') {
	include('../vue/Accueil_en.php');
	include('../vue/Contact_fr.php');
}
else {
	include('../vue/Accueil_fr.php');
	include('../vue/Contact_fr.php');
}

?>