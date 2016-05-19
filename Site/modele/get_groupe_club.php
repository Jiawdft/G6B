<?php
function get_groupe_club($groupe,$club)
{	
	$groupe=htmlspecialchars($groupe);
	$club=htmlspecialchars($club);

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($groupe=='' and $club=='')
	{
		$reponse = $bdd->query('SELECT * FROM club_groupe ORDER BY groupe');
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	elseif($groupe=='' and $club!='')
	{
		
		$reponse=$bdd->prepare('SELECT * FROM club_groupe WHERE club=:club ORDER BY groupe');
		$reponse-> execute(array(
			':club'=> $club
			));
		$groupes=$reponse->fetchAll();
		return $groupes;
		
	}
	elseif($groupe!='')
	{
		$reponse = $bdd->prepare('SELECT * FROM club_groupe WHERE groupe= :groupe');
		$reponse -> execute(array(
				':groupe' => $groupe
				));
		$groupes = $reponse->fetch();
		return $groupes;	
	}
	else
	{
		return;
	}
}

?>