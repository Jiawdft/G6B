<?php 
function get_membres_events($mail,$id){
	$mail=htmlspecialchars($mail);
	$id=htmlspecialchars($id);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if ($mail!='' and $id!='') {
		$reponse = $bdd->prepare('SELECT * FROM event_contient_membre WHERE mail= :mail and id= :id');
		$reponse -> execute(array(
			':mail' => $mail,
			':id' => $id,
			));
		$mail_id = $reponse->fetchAll();
		return $mail_id;
	}


}
 ?>