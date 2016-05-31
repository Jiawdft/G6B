<?php
if(!isset($_SESSION['mail']))
{
	session_start();
}
if(isset($_POST['resultat_nom_event'])){

new_event($_POST['resultat_nom_event'],$_POST['resultat_description'],$_POST['resultat_date'],$_POST['resultat_adresse'],$_GET['groupe']);
include_once'../controleur/Groupe.php';	
}else{
include_once'../vue/new_event.php';
}
?>
