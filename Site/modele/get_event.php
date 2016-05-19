<?php 

function get_event($groupe)
{
	$groupe=htmlspecialchars($groupe);

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe');
	$reponse -> execute(array(
			'groupe' => $groupe,
			));
	$events = $reponse->fetch();
	return $events;
}

 ?>