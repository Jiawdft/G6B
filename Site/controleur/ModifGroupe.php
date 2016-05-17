<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if(!isset($_SESSION['mail'])or $_SESSION==''){
	include_once'../controleur/Connexion.php';
}
include_once'../modele/get_leader_groupe.php';
$groupe=get_leader_groupe($_SESSION['mail'],'');
include_once'../modele/get_membres_groupes.php';
$go=get_membres_groupes('',$groupe['groupe']);
include_once('../vue/ModifGroupe.php');
?>