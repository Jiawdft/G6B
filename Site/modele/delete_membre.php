<?php
function delete_membre($Mail){
	$Mail=htmlspecialchars($Mail);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE membre WHERE adresse_mail =:mail');
		$req->execute(array(
			'mail' => $Mail
	));
	}
?>