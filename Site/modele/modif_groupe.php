<?php
function modif_groupe($Nom,$CodePostal,$Info){
	$Nom=htmlspecialchars($Nom);
	$CodePostal=(int) $CodePostal;
	$Info=htmlspecialchars($Info);	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if (!isset($CodePostal)or $CodePostal==''){
			$req = $bdd->prepare('UPDATE groupe SET information = :information WHERE groupe =:groupe');
			$req->execute(array(
				'groupe' => $Nom,
				'information' => $Info));

	}elseif (!isset($Info)or $Info=='') {
		$req = $bdd->prepare('UPDATE groupe SET codepostal=:codepostal  WHERE groupe =:groupe');
		$req->execute(array(
			'groupe' => $Nom,
			'codepostal'=>$CodePostal,

	}elseif((!isset($Info)or $Info=='') and (!isset($CodePostal)or $CodePostal==''))
	{

	}
	 else
	{
	$req = $bdd->prepare('UPDATE groupe SET information = :information,codepostal=:codepostal  WHERE groupe =:groupe');
		$req->execute(array(
			'groupe' => $Nom,
			'information' => $Info,
			'codepostal'=>$CodePostal

	));
	}
}
?>