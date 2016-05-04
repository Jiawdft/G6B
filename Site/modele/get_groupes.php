<?php
function get_groupes($groupe)
{	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($groupe=='')
	{
	$reponse = $bdd->query('SELECT * FROM groupe ORDER BY groupe');
	$groupes = $reponse->fetchAll();
	return $groupes;
	}
	else
	{
	$reponse = $bdd->prepare('SELECT * FROM groupe WHERE groupe= :groupe');
	$reponse -> execute(array(
			':groupe' => $groupe
			));
	$groupes = $reponse->fetchAll();
	return $groupes;	
	}
}

?>