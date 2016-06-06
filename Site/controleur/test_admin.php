<?php
session_start();
if (!isset($_POST['mail'])) {


	if(isset($_SESSION['mail']))
	{
		include_once'../modele/get_admin.php';
		$membres=get_admin('');
			foreach($membres as $membre)
			{
				if($_SESSION['mail']==$membre['adresse_mail'])
				{
					include_once'../vue/backclient.php';
					break;
				}
			}
<<<<<<< HEAD
			if($_SESSION['mail']!=$membre['adresse_mail'])
			{
				$erreur='droit insuffisant connectez vous avec un compte administrateur';
				include_once('../controleur/backconnexion.php');
=======
		}
		if($_SESSION['mail']!=$membre['adresse_mail']){
			$erreur='insuffisant';
			include_once('../controleur/admin.php');
>>>>>>> 9e911218c70810a998be4b4711704b85c8457175

			}
	}

}
else
{

	if(!isset($_POST['mail']) OR !isset($_POST['passe']))
	{
		$erreur="Veuillez saisir votre adresse mail";
		include('../controleur/admin.php');
	}
	else
	{
		if(($_POST['mail']=="" OR $_POST['passe']==""))
		{

		$erreur="Veuillez saisir votre adresse mail";
			include('../controleur/admin.php');
		}
		else
		{
			include'../modele/get_admin.php';
			$membres=get_admin('');
			foreach($membres as $membre)
			{
				if($_POST['mail']==$membre['adresse_mail']AND password_verify($_POST['passe'],$membre['passe']))
				{
					session_start();
					$_SESSION['mail']=$_POST['mail'];
					include_once'../vue/backclient.php';
					break;
				}
			}
			if(!password_verify($_POST['passe'],$membre['passe'])){
			$erreur='Mot de passe incorrect';
			include_once('../controleur/admin.php');
			}

		}
	}
}

?>