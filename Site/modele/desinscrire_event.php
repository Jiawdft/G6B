<?php 
function desinscrire_event($id,$mail){
	$id=htmlspecialchars($id);
	$mail=htmlspecialchars($mail);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM event_contient_membre WHERE id=:id AND mail=:mail');
	$req->execute(array(
		'id' => $id,
		'mail' => $mail,
	));

}
 ?>