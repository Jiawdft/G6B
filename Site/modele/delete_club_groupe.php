<?php
function delete_club_groupe($Club,$Groupe){
	$Club=htmlspecialchars($Club);
	$Groupe=htmlspecialchars($Groupe);
	include'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM club_groupe WHERE club =:club AND groupe =:groupe');
		$req->execute(array(
			'club' => $Club,
			'groupe'=> $Groupe
	));
	}
?>