<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if($_SESSION['mail']=='' or !isset($_SESSION['mail'])){
	include_once'../controleur/Accueil.php';

}

if(isset($_POST['Description']) or isset($_POST['Codepostal']))
{
	include'../modele/modif_groupe.php';
	modif_groupe($_SESSION['groupe'],$_POST['Codepostal'],$_POST['Description']);
}

if(isset($_GET['new']) and $_GET['new']==true){
	if(!isset($_POST['nom_groupe'])or$_POST['nom_groupe']==""or!isset($_POST['code_postal'])or$_POST['code_postal']==""or!isset($_POST['description'])or$_POST['description']==""){
		$erreur='information manquante';
		include'../controleur/CreerGroupe.php';
	}
	else
	{
	include'../modele/inscription_groupe.php';
	inscription_groupe($_POST['nom_groupe'],$_POST['code_postal'],$_POST['description']);
	include'../modele/add_membre_groupe.php';
	add_membre_groupe($_SESSION['mail'],$_POST['nom_groupe']);
	include'../modele/add_leader_groupe.php';
	add_leader_groupe($_SESSION['mail'],$_POST['nom_groupe']);
	include'../controleur/Page_Personnelle.php';
	}
}else{
include'../modele/get_membres_groupes.php';
include'../modele/get_membres.php';
$mails= get_membres_groupes('',$_GET['groupe']);
$membres=get_membres('');
include'../vue/Page_Personnelle_mon_groupe.php';
}
?>