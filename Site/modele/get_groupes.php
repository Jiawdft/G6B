<?php
function get_groupes($groupe,$codepostal)
{	
	$groupe=htmlspecialchars($groupe);
	$codepostal=(int)$codepostal;

	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($groupe=='' and $codepostal=='')
	{
		$reponse = $bdd->query('SELECT * FROM groupe ORDER BY groupe');
		$groupes = $reponse->fetchAll();
		return $groupes;
	}
	elseif($groupe=='' and $codepostal!='')
	{
		
		$reponse=$bdd->prepare('SELECT * FROM groupe WHERE codepostal=:codepostal ORDER BY groupe');
		$reponse-> execute(array(
			':codepostal'=> round($codepostal/1000)
			));
		$groupes=$reponse->fetchAll();
		return $groupes;
		
	}
	elseif($groupe!='')
	{
		$reponse = $bdd->prepare('SELECT * FROM groupe WHERE groupe= :groupe');
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