<?php 

	include_once'../modele/get_sports_groupes.php';
	$test=get_sports_groupes($_POST['sport'],'');

	include_once'../Back Office/back_client.php';

 ?>