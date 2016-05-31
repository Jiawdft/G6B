<?php
function delete_post($ID){
	$ID=htmlspecialchars($ID);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM post WHERE id=:id');
		$req->execute(array(
			'id' => $ID
	));
	}
?>