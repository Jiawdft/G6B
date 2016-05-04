<?php

function inscription_sport($Sport,$Information)
{
	$Sport=htmlspecialchars($Sport);
	$Information=htmlspecialchars($Information);
	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO sport(sport, information) 
		VALUES(:sport, :information)');
	$req->execute(array(
	'information' => $Information,
	'sport' => $Sport
	));
}

?>