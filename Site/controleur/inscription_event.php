<?php 
if(!isset($_SESSION['mail']))
{
session_start();
}

include_once'../modele/get_event.php';
$event=get_event($_GET['groupe']);
$next_event = $event->fetch();

include_once'../modele/inscription_event.php';


inscription_event($_SESSION['mail'],$next_event['id']);

include_once'../controleur/Groupe.php';