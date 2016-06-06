<?php 

function ajout_question($ques,$rep){
	$rep=htmlspecialchars($rep);
	$ques=htmlspecialchars($ques);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO question(question,reponse) 
		VALUES(:question,:reponse)');
	$req->execute(array(
	'question' => $ques,
	'reponse' => $rep
	));

}
 ?>