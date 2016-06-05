<?php
if(!isset($_SESSION['mail']))
{
session_start();
}

include_once'../modele/delete_event.php';
delete_event($_GET['id']);

header ('location: ../controleur/Page_Personnelle_mon_groupe.php?groupe='.$_GET['groupe']);
