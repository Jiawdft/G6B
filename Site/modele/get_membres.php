<?php
function get_membres(){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT * FROM membre');
	$membres = $reponse->fetchAll();
	return $membres
}
?>