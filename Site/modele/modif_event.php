<?php
function modif_groupe($ID,$Nom,$Description,$Date){

	$ID=(int) $ID;
	$Description=htmlspecialchars($Description);
	$Date=htmlspecialchars($Date);	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if(isset($Nom)and $Nom!=''){
		$req = $bdd->prepare('UPDATE event SET numero_de_portable = :telephone WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'nom' => $Nom));

	}
	if(isset($Description)and $Description!=''){
		$req = $bdd->prepare('UPDATE event SET adresse = :adresse WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'description' => $Description));

	

	}
	if(isset($Date)and $Date!=''){
		$req = $bdd->prepare('UPDATE event SET date = :Date WHERE id =:ID');
			$req->execute(array(
				'ID' => $ID,
				'Date' => $Date));
}
?>