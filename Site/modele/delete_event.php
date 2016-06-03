<?php
function delete_event($Id){
	$Id=(int)$Id;
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM event WHERE id =:Id');
		$req->execute(array(
			'Id' => $Id
	));
	}

function clean_membre_event($id){
	$id=htmlspecialchars($id);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM event_contient_membre WHERE id= :id');
	$req->execute(array(
		'id' => $id,
	));
}
?>
