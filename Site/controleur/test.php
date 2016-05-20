<?php 

	if(!isset($_SESSION['mail']))
	{
	session_start();
	}
	include_once'../modele/inscription_event.php';
	inscription_event('j@gmail.com',"2");
	



