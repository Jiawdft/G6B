<?php
function delete_membre_groupe($Mail,$Groupe){
	$Mail=htmlspecialchars($Mail);
	$Groupe=htmlspecialchars($Groupe);
	include_once'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM groupe_contient_membre WHERE membre =:membre AND groupe =:groupe');
		$req->execute(array(
			'membre' => $Mail,
			'groupe'=> $Groupe
	));
	}
?>