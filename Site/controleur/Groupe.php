<?php
if(!isset($_SESSION['mail']))
{
session_start();
}
if(!isset($_GET['groupe']))
{
	include_once'../controleur/Accueil.php';
}else{
	include_once'../modele/get_groupes.php';
	$groupes=get_groupes($_GET['groupe'],'');
	include_once'../modele/get_membres_groupes.php';
	if(isset($_SESSION['mail']))
	{
	$deja_membre=get_membres_groupes($_SESSION['mail'],$_GET['groupe']);
	}
	include_once'../modele/get_event.php';
	$next_event=get_event($_GET['groupe']);
	include_once'../modele/get_membres_events.php';
	if (isset($_SESSION['mail'])) {
		$deja_event=get_membres_events($_SESSION['mail'],$next_event['id']);
	}
	include_once'../vue/Groupe.php';


//	include_once'get_membres_groupes.php';
}
