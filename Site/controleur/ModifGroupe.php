<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
include_once('../modele/langue.php');
if(isset($_GET['groupe']) and isset($_GET['Del'])){
	$leader=get_leader_groupe('','');
	foreach ($leader as $lead) {
	if($lead['membre']==$_SESSION['mail'] and $lead['groupe']==$_GET['groupe']){
		include_once'modele/delete_groupe.php';
		delete_groupe($_GET['groupe']);
		include_once'../controleur/Accueil.php';
	}
	include_once'../controleur/Accueil.php';
}
else{
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
}



?>