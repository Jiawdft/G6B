<?php
function delete_club_groupe($Club,$Groupe){
	$Club=htmlspecialchars($Club);
	$Groupe=htmlspecialchars($Groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM club_groupe WHERE club =:club AND groupe =:groupe');
		$req->execute(array(
			'club' => $Club,
			'groupe'=> $Groupe
	));
	}
?>