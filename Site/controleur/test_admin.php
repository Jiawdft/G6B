<?php
session_start();
<<<<<<< HEAD




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
		if($_SESSION['mail']!=$membre['adresse_mail'])
		{
			$erreur='droit insuffisant connectez vous avec un compte administrateur';
			include_once('../controleur/backconnexion.php');

		}
}
else
{
=======
if(isset($_SESSION['mail'])){
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
		if($_SESSION['mail']!=$membre['adresse_mail']){
			$erreur='insuffisant';
			include_once('../controleur/admin.php');

		}

}else{

>>>>>>> 987a3d167e5dca49bfc2bca1e2a8f71c54f977a7
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