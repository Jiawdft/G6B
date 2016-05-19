<?php
function get_post($sujet,$sous_sujet)
{
$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($sujet=='' and $sous_sujet=='')
	{
		$reponse = $bdd->query('SELECT * FROM post ORDER BY date');
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	if($sujet!='' and $sous_sujet!='')
	{
		$reponse = $bdd->query('SELECT * FROM post WHERE sujet= :sujet, sous_sujet= :sous_sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $sujet,
			':sous_sujet'=>$sous_sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	if($sujet!=''){

		$reponse = $bdd->prepare('SELECT * FROM post WHERE sujet= :sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;

	}
	if($sous_sujet!=''){

		$reponse = $bdd->prepare('SELECT * FROM post WHERE sous_sujet= :sujet ORDER BY date');
		$reponse-> execute(array(
			':sujet'=> $sous_sujet
			));
		$groupes = $reponse->fetchAll();
		return $groupes;

	}

?>