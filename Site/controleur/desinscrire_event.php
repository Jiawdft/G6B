<?php 
if(!isset($_SESSION['mail']))
{
session_start();
}
include_once'../modele/get_event.php';
	$events=get_event($_GET['groupe']);
	$next_event=$events->fetch();
include_once'../modele/desinscrire_event.php';
desinscrire_event($next_event['id'],$_SESSION['mail']);

header('Location: ../controleur/Groupe.php?groupe='.$_GET['groupe']);

?>