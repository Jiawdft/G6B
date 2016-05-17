<?php
function delete_event($Id){
	$Id=(int)$Id;
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE event WHERE id =:Id');
		$req->execute(array(
			'Id' => $Id
	));
	}
?>