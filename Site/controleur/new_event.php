<?php
if(!isset($_SESSION['mail']))
{
	session_start();
}
include_once'../modele/new_event.php';
new_event($_POST['resultat_nom_event'],$_POST['resultat_description'],$_POST['resultat_date'],$_POST['resultat_adresse'],$_GET['groupe']);

?>
