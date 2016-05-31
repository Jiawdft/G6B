<?php
if(!isset($_SESSION['mail']))
{
	session_start();
}
<<<<<<< HEAD
include_once'../modele/new_event.php';
=======
if(isset($_POST['resultat_nom_event'])){

>>>>>>> origin/master
new_event($_POST['resultat_nom_event'],$_POST['resultat_description'],$_POST['resultat_date'],$_POST['resultat_adresse'],$_GET['groupe']);
include_once'../controleur/Groupe.php';	
}else{
include_once'../vue/new_event.php';
}
?>
