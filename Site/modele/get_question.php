<?php
function get_question()
{	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
		$reponse=$bdd->query('SELECT * FROM question');
		$question=$reponse->fetchAll();
		return $question;
	}
?>