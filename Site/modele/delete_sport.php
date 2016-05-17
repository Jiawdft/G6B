<?php
function delete_sport($Nom){
	$Nom=htmlspecialchars($Nom);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM sport WHERE sport =:sport');
		$req->execute(array(
			'sport' => $Nom
	));
	}
?>