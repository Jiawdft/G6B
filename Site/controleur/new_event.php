<?php 
if(!isset($_SESSION['mail']))
{
	session_start();
}

include_once'../modele/new_event.php';
new_event($_POST['nom_event'],$_POST['description'],$_POST['date'],'');

?>