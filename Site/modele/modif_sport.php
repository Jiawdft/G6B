<?php
function modif_sport($Nom,$Info){
	$Nom=htmlspecialchars($Nom);
	$Info=htmlspecialchars($Info);	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if(isset($Info) and  $Info=='')
	{
	$req = $bdd->prepare('UPDATE sport SET information = :information WHERE sport =:sport');
		$req->execute(array(
			'sport' => $Nom,
			'information' => $Info

	));
	}
}
?>