<?php
function get_last()
{
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');

	$reponse = $bdd->query('SELECT * FROM groupe ORDER BY date_creation DESC LIMIT 0, 5');
	$groupes = $reponse->fetchAll();
	return $groupes;
}
?>