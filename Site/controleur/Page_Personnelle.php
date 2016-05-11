<?php
if(!isset($_SESSION['mail']))
{
session_start();
include_once'../controleur/Accueil.php';
}

include_once'../modele/get_membres.php';
$membre=get_membres($_SESSION['mail']);
include'../modele/get_membres_groupes.php';
$groupes=get_membres_groupes($_SESSION['mail'],'');
foreach ($groupes as $cle =>$groupe) {
	$groupes[$cle]['groupe'] = htmlspecialchars($groupe['groupe']);
}

include_once('../vue/Page_Personnelle.php');	
?>