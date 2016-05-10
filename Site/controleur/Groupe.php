<?php



if(!isset($_SESSION['mail']))
{
session_start();
}



//include_once('../modele/get_membres_groupes.php'); //l'erreur semble venir de cette ligne
/*
$mails_groupes=get_membres_groupes($_SESSION['mail'],$_GET['groupe']);
if (!isset($mails_groupes)) {	
	$deja_membre=false;
}
else{
	$deja_membre=true;
}
*/

include_once('../vue/Groupe.php');

