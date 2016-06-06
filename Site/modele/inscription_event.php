<?php 

function inscription_event($mail,$id){
	$mail=htmlspecialchars($mail);
	$id=htmlspecialchars($id);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO event_contient_membre(mail,id) 
		VALUES(:mail,:id)');
	$req->execute(array(
	'mail' => $mail,
	'id' => $id
	));

}
 ?>