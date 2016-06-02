<?php
if(!isset($_SESSION['mail']))
{
session_start();
}

if(!isset($_SESSION['mail']) or !isset($_SESSION['groupe'])){
	$erreur='Modification du groupe impossible connecter vous avec le compte administrateur';
	include_once'../vue/Connexion.php';
}
else{
include_once'../modele/get_leader_groupe.php';
$groupe=get_leader_groupe($_SESSION['mail'],'');
include_once'../modele/get_membres_groupes.php';
$go=get_membres_groupes('',$_SESSION['groupe']);
include_once('../vue/ModifGroupe.php');
}
?>