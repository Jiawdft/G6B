<?php

if(!isset($_POST['mail']) OR !isset($_POST['passe']))
{
	$erreur="Veuillez saisir votre adresse mail ";
	include('../controleur/Connexion.php');

}
else
{
	if(($_POST['mail']=="" OR $_POST['passe']==""))
	{

	$erreur="Veuillez saisir votre adresse mail ";
		include('../controleur/Connexion.php');

	}
	else
	{
		include'../modele/get_membres.php';
		$membres=get_membres('');
		foreach($membres as $membre)
		{

			if($_POST['mail']==$membre['adresse_mail']AND password_verify($_POST['passe'],$membre['mdp']))
			{
				session_start();
				$_SESSION['mail']=$membre['adresse_mail'];
				include'../modele/get_leader_groupe.php';
				$groupe=get_leader_groupe($_POST['mail'],'');
				if(isset($groupe['groupe']) and $groupe['groupe']!=''){
					$_SESSION['groupe']=$groupe['groupe'];
				}
				include'../controleur/Accueil.php';
				break;	
			}
			
		}
		$erreur='mauvais mot de passe ';
		include('../controleur/Connexion.php');

	}
}

?>