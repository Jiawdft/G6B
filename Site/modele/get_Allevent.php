<?php

function get_Allevent($groupe)
{
	if($groupe==''){
		include_once'connexion_sql.php';
	$reponse = $bdd->query('SELECT * FROM event ORDER BY date');
	$event=$reponse->fetchAll();
	return $event;

	}else{
	$groupe=htmlspecialchars($groupe);

	include_once'connexion_sql.php';
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe');
	$reponse -> execute(array(
			'groupe' => $groupe,
			));
	$event= $reponse->fetchAll();
	return $event;}
}
 ?>
