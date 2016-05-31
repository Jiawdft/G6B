<?php
function delete_sport_groupe($Sport,$Groupe){
	$Sport=htmlspecialchars($Sport);
	$Groupe=htmlspecialchars($Groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM sport_groupe WHERE sport =:sport AND groupe =:groupe');
		$req->execute(array(
			'sport' => $Sport,
			'groupe'=> $Groupe
	));
	}
?>