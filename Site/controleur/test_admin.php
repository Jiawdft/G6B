<?php

if(!isset($_POST['mail']) OR !isset($_POST['passe']))
{
	$erreur="Veuillez saisir votre adresse mail";
	include('../controleur/connexionBO.php');
}
else
{
	if(($_POST['mail']=="" OR $_POST['passe']==""))
	{

	$erreur="Veuillez saisir votre adresse mail";
		include('../controleur/connexionBO.php');
	}
	else
	{
		include'../modele/get_madmin.php';
		$membres=get_membres('');
		foreach($membres as $membre)
		{
			if($_POST['mail']==$membre['adresse_mail']AND password_verify($_POST['passe'],$membre['mdp']))
			{
				session_start();
				include_once'../controleur/backclient.php';
				break;
			}
		}
		if(!password_verify($_POST['passe'],$membre['mdp'])){
		$erreur='Mot de passe incorrect';
		include_once('../controleur/connexionBO.php');
		}

	}
}

?>