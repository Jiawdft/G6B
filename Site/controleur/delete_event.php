<?php
if(!isset($_SESSION['mail']))
{
session_start();
}




include_once'../modele/get_event.php';
$ev=selection_event_by_id($_GET['id']);

include_once'../modele/delete_event.php';
delete_event($_GET['id']);

header ('location: ../controleur/Page_Personnelle_mon_groupe.php?groupe='.$_GET['groupe']);
/*
if (!isset($_SESSION['mail']) or !isset($_SESSION['groupe']) or $ev['createur']==$_SESSION['mail']) {
    include_once'../modele/delete_event.php';
    delete_event($_GET['id']);
}
*/
