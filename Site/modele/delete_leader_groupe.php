<?php
function delete_leader_groupe($Mail,$Groupe){
	$Mail=htmlspecialchars($Mail);
	$Groupe=htmlspecialchars($Groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM groupe_leader WHERE membre =:membre AND groupe =:groupe');
		$req->execute(array(
			'membre' => $Mail,
			'groupe'=> $Groupe
	));
	}
?>