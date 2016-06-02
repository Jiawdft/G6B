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

function selection_event($groupe,$nom){
	$groupe=htmlspecialchars($groupe);
	$nom=htmlspecialchars($nom);

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe AND nom= :nom');
	$reponse -> execute(array(
			'groupe' => $groupe,
			'nom' => $nom,
			));
	$event= $reponse->fetch();
	return $event;
}

 ?>
