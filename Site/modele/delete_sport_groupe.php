<?php
function delete_sport_groupe($Sport,$Groupe){
	$Sport=htmlspecialchars($Sport);
	$Groupe=htmlspecialchars($Groupe);
	if($Sport!='' and $Groupe!=''){
	include_once'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM sport_groupe WHERE sport =:sport AND groupe =:groupe');
		$req->execute(array(
			'sport' => $Sport,
			'groupe'=> $Groupe
	));
	}
	elseif($Sport!='' and $Groupe==''){
	include_once'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM sport_groupe WHERE sport =:sport');
	$req->execute(array(
			'sport' => $Sport
	));

	}
	elseif($Sport=='' and $Groupe!=''){
	include_once'connexion_sql.php';
	$req = $bdd->prepare('DELETE FROM sport_groupe WHERE groupe =:groupe');
	$req->execute(array(
			'groupe'=> $Groupe
	));

	}

	}
?>