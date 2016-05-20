
<?php
function get_sports_groupes($sport,$groupe){
	$sport=htmlspecialchars($sport);
	$groupe=htmlspecialchars($groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($groupe=='' and $sport=='')
	{
		$reponse = $bdd->query('SELECT * FROM sport_groupe');
		$sports_groupes = $reponse->fetchAll();
		return $sports_groupes;
	}
	elseif($groupe=='')
	{
		$reponse = $bdd->prepare('SELECT * FROM sport_groupe WHERE sport= :sport');
		$reponse -> execute(array(
			':sport' => $sport
			));
		$sports_groupes = $reponse->fetchAll();
		return $sports_groupes;
//		return $reponse;
	}
	elseif ($sport=='') 
	{
		$reponse = $bdd->prepare('SELECT * FROM sport_groupe WHERE groupe= :groupe');
		$reponse -> execute(array(
		':groupe' => $groupe
		));
		$sports_groupes = $reponse->fetchAll();
		return $sports_groupes;
	}
	else
	{
		return;
	}

}
?>