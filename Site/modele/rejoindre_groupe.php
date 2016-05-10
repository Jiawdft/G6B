<?php 

echo $_GET['groupe'];
echo $_SESSION['mail'];


/*if(isset($_SESSION['mail']))
{
	$req = $bdd->prepare('INSERT INTO groupe_contient_membre(groupe,membre)
		VALUES(:groupe,:mail)');
	$req->execute(array(
	':groupe' => $_GET['groupe']
	':mail' => $_SESSION['mail']
}

include_once('../controleur/Groupe.php');


/*function rejoindre_groupe($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);

	include_once('../modele/connexion_sql.php');
	$req = $bdd->prepare('INSERT INTO groupe_contient_membre(groupe,membre)
		VALUES(:groupe,:mail)');
	$req->execute(array(
		':groupe' => $groupe
		':mail' => $mail
		));
}
*/


 ?>