<?php
if(!isset($_SESSION['mail']))
{
session_start();
}

if(!isset($_SESSION['mail']) and !isset($_GET['groupe'])){
	$erreur='Modification du groupe impossible connecter vous avec le compte administrateur';
	include_once'../vue/Connexion.php';
}
else{
	include_once'../modele/get_leader_groupe.php';
	$groupe=get_leader_groupe($_SESSION['mail'],$_GET['groupe']);
	foreach ($groupe as $gr )
	{
		if($_SESSION['mail']==$gr['membre'] and $_GET['groupe']==$gr['groupe'])
		{
		include_once'../modele/get_membres_groupes.php';
		$go=get_membres_groupes('',$_GET['groupe']);
		include_once('../vue/ModifGroupe.php');
		}
	}
if(!$_SESSION['mail']==$gr['membre']){
$erreur='Vous ne possèdez pas les droits de modifier le groupe';
include_once'../vue/Connexion.php';}
}

include_once('../modele/langue.php');

?>