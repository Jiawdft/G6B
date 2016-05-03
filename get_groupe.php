<?php
function get_Groupe(){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT * FROM groupe');
	$donnees = $reponse->fetchAll();
	return $Groupe;
}

?>