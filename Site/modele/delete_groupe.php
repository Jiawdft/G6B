<?php
function delete_groupe($Nom){
	$Nom=htmlspecialchars($Nom);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM groupe WHERE groupe =:groupe');
		$req->execute(array(
			'groupe' => $Nom
	));
	}
?>