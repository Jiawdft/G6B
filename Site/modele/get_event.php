<?php

function get_event($groupe)
{
	if($groupe==''){
		$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT * FROM event ORDER BY date');
	$event=$reponse->fetchAll();
	return $event;

	}else{
	$groupe=htmlspecialchars($groupe);

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe');
	$reponse -> execute(array(
			'groupe' => $groupe,
			));
	$event= $reponse->fetch();
	return $event;}
}

function get_list_event($groupe){
	if ($groupe!='') {
		$groupe=htmlspecialchars($groupe);

		$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
		$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe ORDER BY date');
		$reponse -> execute(array(
				'groupe' => $groupe,
				));
		$event= $reponse->fetchAll();
		return $event;
	}
}

function selection_event($groupe,$ID){
	$groupe=htmlspecialchars($groupe);
	$ID=htmlspecialchars($ID);

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe AND id= :id');
	$reponse -> execute(array(
			'groupe' => $groupe,
			'id' => $ID,
			));
	$event= $reponse->fetch();
	return $event;
}

 ?>
