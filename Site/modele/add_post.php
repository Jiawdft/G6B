<?php
function add_post($Post,$Mail,$Sujet,$Sous_sujet){
	$Post=htmlspecialchars($Post);
	$Mail=htmlspecialchars($Mail);
	$Sujet=htmlspecialchars($Sujet);
	$Sous_sujet=htmlspecialchars($Sous_sujet);
	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO post(sujet,sous_sujet,auteur,post) 
		VALUES(:sujet,:sous_sujet,:auteur,:post)');
$req->execute(array(
	'sujet' => $Sujet,
	'sous_sujet' => $Sous_sujet,
	'auteur' => $Mail,
	'post' => $Post
	);
}
?>