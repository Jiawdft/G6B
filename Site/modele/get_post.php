<?php
function get_post($Sujet,$Sous_sujet)
{
	$Sujet=htmlspecialchars($Sujet);
	$Sous_sujet=htmlspecialchars($Sous_sujet);
$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($Sujet=='' and $Sous_sujet=='')
	{
		$reponse = $bdd->query('SELECT * FROM post ORDER BY date');
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	elseif($Sujet!=''){

		$reponse = $bdd->prepare('SELECT * FROM post WHERE sujet= :sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $Sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;

	}
	elseif($Sous_sujet!=''){

		$reponse = $bdd->prepare('SELECT * FROM post WHERE sous_sujet= :sous_sujet ORDER BY date');
		$reponse-> execute(array(
			':sous_sujet'=> $Sous_sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;

	}elseif($Sujet!='' and $Sous_sujet!='')
	{
		$reponse = $bdd->prepare('SELECT * FROM post WHERE sujet= :sujet,sous_sujet=:sous_sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $Sujet,
			':sous_sujet'=>$Sous_sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
}
?>