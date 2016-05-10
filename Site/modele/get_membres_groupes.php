<?php
function get_membres_groupes($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($groupe=='' and $mail=='')
	{
		$reponse = $bdd->query('SELECT * FROM groupe_contient_membre');
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif($groupe=='')
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe_contient_membre WHERE membre= :mail');
		$reponse -> execute(array(
			':mail' => $mail
			));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif ($mail=='') 
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe_contient_membre WHERE groupe= :groupe');
		$reponse -> execute(array(
		':groupe' => $groupe
		));
		$mails_groupes = $reponse->fetchAll();
		return $mails_groupes;
	}
	elseif ($mail!='' and $groupe!='') {
		$reponse = $bdd->prepare('SELECT * FROM groupe_contient_membre WHERE membre= :mail AND groupe= :groupe');
		$reponse -> execute(array(
			':mail' => $mail
			':groupe' => $groupe
			));
		$mails_groupes = $reponse->fetchALL();
		return $mails_groupes;
	}
	else
	{
		return;
	}

}