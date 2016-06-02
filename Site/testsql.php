<?php
$Groupe='TotalySport';
$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM sport_groupe WHERE groupe =:groupe');
		$req->execute(array(
			'groupe'=> $Groupe));
?>