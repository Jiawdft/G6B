<?php 
function get_event($groupe){
	$groupe=htmlspecialchars($groupe);

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if (!isset($groupe)) {
		$reponse = $bdd->prepare('SELECT * FROM event WHERE groupe= :groupe');
		$reponse -> execute(array(
				':groupe' => $groupe
				));
		$groupes = $reponse->fetch();
		return $events;
	}
	else{
		return;
	}
}

 ?>